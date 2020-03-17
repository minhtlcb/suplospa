<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerificationpassresetEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     // * @return void
     */
    public $subject;
    public $user;
    public function __construct($thisUser)
    {
        //
         $this->user = $thisUser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('ABCD-Quên mật khẩu')->view('verifypasswordemail');
    }
}
