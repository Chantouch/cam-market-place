<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderCompleted extends Mailable
{
    use Queueable, SerializesModels;
    public $content;

    /**
     * Create a new message instance.
     *
     * @param $content
     */
    public function __construct($content)
    {
        $this->content = $content;
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
