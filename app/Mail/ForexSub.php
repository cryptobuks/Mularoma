<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForexSub extends Mailable
{
    use Queueable, SerializesModels;
    public $username,$package_name,$amount,$group_link;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username,$package_name,$amount,$group_link)
    {
        //
        $this->username=$username;
        $this->package_name=$package_name;
        $this->amount=$amount;
        $this->group_link=$group_link;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from("info@elshadaigtinvestment.org","Package subscription")
        ->markdown('emails.Forex');
    }
}
