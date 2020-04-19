<?php

namespace App\Mail;

use App\covid;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailUser extends Mailable
{
    use Queueable, SerializesModels;

    public $covid;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(covid $covid)
    {
        $this->covid = $covid;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mailTemp', compact('covid'));
    }
}
