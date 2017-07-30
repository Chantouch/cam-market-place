<?php

namespace App\Listeners;

use App\Events\CustomerRegistered;
use App\Model\Image;
use App\Model\TempData;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class UpdateCustomerProfile
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
        $temp_db = TempData::with('owner')->where('customer_id', $customer->id)->first();
        $images = Image::with('imageable')->FirstOrNew([
            'img_name' => $temp_db->data
        ]);
        $customer->avatar()->save($images);
        if (!$customer->avatar()->save($images))
            throw new ModelNotFoundException();
    }
}
