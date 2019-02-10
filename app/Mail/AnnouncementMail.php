<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Announcement;
use App\User;

class AnnouncementMail extends Mailable
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
        $announcement = announcement::latest()->first()->text;
      
        return $this->view('mail.announcement', ["announcement" => $announcement])->subject("Nieuwe Mededeling")->to($users);
    }
}
