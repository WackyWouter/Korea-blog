<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Comment;
use App\Post;

class CommentMail extends Mailable
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


        $comment = comment::latest()->first();
        $post = post::where('id', $comment->post_id)->first();
        $link = url("/post/{$post->slug}");
      



        return $this->view('mail.commentMail', ["link" => $link])->subject("Nieuwe Comment")->to('wouter.korea.blog@gmail.com');
    }
}
