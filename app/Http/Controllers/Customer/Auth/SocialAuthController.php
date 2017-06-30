<?php

namespace App\Http\Controllers\Customer\Auth;

use app\Http\SocialAccountService;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback(SocialAccountService $service)
    {
        // when facebook call us a with token
        $customer = $service->createOrGetUser(Socialite::driver('facebook')->customer());

        auth()->login($customer);

        return redirect()->route('customers.dashboard');
    }
}
