<?php

namespace App\Mail;

use App\Model\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderCompleted extends Mailable
{
    use Queueable, SerializesModels;
    public $content;
    public $customer;

    /**
     * Create a new message instance.
     *
     * @param $content
     * @param Customer $customer
     */
    public function __construct($content, Customer $customer)
    {
        $this->content = $content;
        $this->customer = $customer;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.orders.completed')
            ->with('content', $this->content);
    }
}
