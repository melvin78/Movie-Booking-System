<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TicketPurchasedSuccessfully extends Mailable
{
    use Queueable, SerializesModels;

    public $ticketdetails;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($ticketdetails)
    {
        $this->ticketdetails = $ticketdetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.tickets.purchase');
    }
}
