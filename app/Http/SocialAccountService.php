<?php
/**
 * Created by PhpStorm.
 * User: Chantouch
 * Date: 6/29/2017
 * Time: 11:09 PM
 */

namespace App\Http;

use App\Model\Customer;
use App\Model\SocialAccount;
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
            $user = Customer::whereEmail($providerUser->getEmail())->first();
            if (!$user) {
                $user = Customer::create([
                    'email' => $providerUser->getEmail(),
                    'username' => $providerUser->getName(),
                    'password' => bcrypt(123456),
                ]);
            }
            $account->customer()->associate($user);
            $account->save();
            return $user;
        }
    }
}