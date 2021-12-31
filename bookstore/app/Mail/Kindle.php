<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Kindle extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    public $book;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$book)
    {
       $this->user=$user;
       $this->book=$book;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('Mail.kindle');
    }
}
