<?php

namespace App\Listeners;

use App\Events\CustomerRegistered;
use App\Mail\CustomerAccountActivation;
use App\Model\Customer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendCustomerActivationCode
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CustomerRegistered $event
     * @return void
     */
    public function handle(CustomerRegistered $event)
    {
        $customer = $event->customer;
        $email = new CustomerAccountActivation(new Customer([
            'username' => $customer->username,
            'first_name' => $customer->first_name,
            'last_name' => $customer->last_name,
            'verified_code' => $customer->verified_code,
            'temp_enroll' => $customer->temp_enroll,
        ]));
        Mail::to($customer->email)->send($email);
    }
}
