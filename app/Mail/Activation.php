<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Activation extends Mailable
{
    use Queueable, SerializesModels;
    
    public $s,$message,$subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($s,$message,$subject)
    {
        //
        $this->s=$s;
        $this->message=$message;
        $this->subject=$subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('info@elshadaigtinvestment.org',$this->subject)
        ->markdown('emails.Activation');
    }
}
