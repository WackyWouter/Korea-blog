<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;
use App\Post;

class SendMail extends Mailable
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
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $users = user::where('onMailingList', 'True')->get();
        $post = post::latest()->first();
        $link = url("/post/{$post->slug}");
        // test




        return $this->view('mail.mail', ["link" => $link])->subject("Nieuwe post")->to($users);
    }
}
