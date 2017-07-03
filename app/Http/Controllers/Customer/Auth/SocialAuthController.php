<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\SocialAccountService;
use App\Http\Controllers\Controller;
use App\Model\Customer;
use App\Model\SocialAccount;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{

    /**
     * @return mixed
     */
    public function redirect()
    {
        if (!config("services.facebook"))
            abort('404');
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * @param SocialAccountService $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function callback(SocialAccountService $service)
    {
        $customer = $service->createOrGetUser(Socialite::driver('facebook')->user());
        $this->guard()->login($customer, true);
        return redirect()->route('customers.dashboard');
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('customer');
    }

}
