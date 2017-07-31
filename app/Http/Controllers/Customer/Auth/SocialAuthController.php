<?php

namespace App\Http\Controllers\Customer\Auth;

use App\Http\SocialAccountService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{

    /**
     * @return mixed
     */
    public function redirect()
    {
        if (!config("services.facebook"))
            abort('404','Error 404 not found!');
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
        $notification = [
            'message' => 'Success logged to your account!',
            'alert-type' => 'success'
        ];
        return redirect()->route('customers.dashboard')->with($notification);
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
