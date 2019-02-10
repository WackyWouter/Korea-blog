<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
class UserMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * 
     *
     * @return $this
     */
    public function build()
    {
      $user = User::latest()->first();

      return $this->view('mail.userMail', ["user" => $user])->subject("Nieuwe user")->to("wouter.korea.blog@gmail.com");
    }
}
