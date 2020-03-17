<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;

class VerificationEmail extends Mailable
{
    use Queueable, SerializesModels;


public $subject;
    public $user;
    public function __construct(User $thisUser)
    {
        
         $this->user = $thisUser;
    }


    public function build()
    {
        return $this->subject('Kích hoạt tài khoản Web ABCD')->view('verifyemail');
    }
}
