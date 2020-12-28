<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    private $_username;
    private $_email;
    private $_subject;
    private $_main;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->_username = $request->username;
        $this->_email = $request->email;
        $this->_subject = $request->subject;
        $this->_main = $request->main;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('example@example.com')
            ->subject($this->_subject)
            ->with(
                [
                    'username' => $this->_username,
                    'email' => $this->_email,
                    'subject' => $this->_subject,
                    'main' => $this->_main,
                ],
            )
            ->view('emails.contact');
    }
}
