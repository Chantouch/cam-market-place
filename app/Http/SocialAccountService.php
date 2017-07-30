<?php
/**
 * Created by PhpStorm.
 * User: Chantouch
 * Date: 6/29/2017
 * Time: 11:09 PM
 */

namespace App\Http;

use App\Events\CustomerRegistered;
use App\Model\Customer;
use App\Model\SocialAccount;
use App\Model\TempData;
use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = SocialAccount::whereProvider('facebook')
            ->whereProviderUserId($providerUser->getId())
            ->first();
        if ($account) {
            return $account->customer;
        } else {
            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'facebook'
            ]);
            //Generate Temp enrollment
            $records = Customer::all()->count();
            $current_id = 1;
            if (!$records == 0) {
                $current_id = Customer::all()->last()->id + 1;
            }
            $enroll_id = 'TMP_CUS_' . date('Y') . str_pad($current_id, 5, '0', STR_PAD_LEFT);
            $token = str_random(60);
            $user = Customer::whereEmail($providerUser->getEmail())->first();
            if (!$user) {
                $exp = explode(" ", $providerUser->getName());
                $first_name = $exp[0];
                $last_name = $exp[1];
                $user_obj = [
                    'email' => $providerUser->getEmail(),
                    'username' => $providerUser->getName(),
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'avatar' => $providerUser->getAvatar(),
                    'verified_code' => $token,
                    'temp_enroll' => $enroll_id
                ];
                $user = Customer::with('addresses')->create([
                    'email' => $providerUser->getEmail(),
                    'username' => $providerUser->getName(),
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'password' => bcrypt(str_random(6)),
                    'verified_code' => $token,
                    'temp_enroll' => $enroll_id
                ]);
                TempData::with('owner')->create([
                    'customer_id' => $user->id,
                    'data' => $providerUser->getAvatar(),
                ]);
            }
            $account->customer()->associate($user);
            $account->save();
            event(new CustomerRegistered($user));
            return $user;
        }
    }
}