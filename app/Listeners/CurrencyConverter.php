<?php

namespace App\Listeners;

use App\Events\ProductEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class CurrencyConverter implements ShouldQueue
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
     * @param  ProductEvent $event
     * @return void
     */
    public function handle(ProductEvent $event)
    {
        Log::info('Currency Converter', ['Currency' => $event->product]);
    }
}
