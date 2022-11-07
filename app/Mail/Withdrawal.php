<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Withdrawal extends Mailable
{
    use Queueable, SerializesModels;
    public $username,$amount,$source,$destination;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username,$amount,$source,$destination)
    {
        //
        
        $this->username=$username;
        $this->amount=$amount;
        $this->source=$source;
        $this->destination=$destination;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('info@elshadaigtinvestment.org','Withdrawal Notification')
        ->markdown('emails.withdraw');
    }
}
