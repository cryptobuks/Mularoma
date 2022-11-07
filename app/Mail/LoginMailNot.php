<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LoginMailNot extends Mailable
{
    use Queueable, SerializesModels;
    public  $name,$server;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$server)
    {
        //
        $this->server=$server;
        $this->name=$name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('info@elshadaigtinvestment.org','Login Notification')
        ->markdown('emails.login');
    }
}
