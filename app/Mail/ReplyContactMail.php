<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public $replyMessage;
    public $credit;

    public function __construct($contact, $replyMessage, $credit)
    {
        $this->contact = $contact;
        $this->replyMessage = $replyMessage;
        $this->credit = $credit; // Storing the sender's name
    }

    public function build()
    {
        return $this->subject('Reply to Your Inquiry')
                    ->view('emails.reply_template') // Your email template view
                    ->with([
                        'contactName' => $this->contact->name,
                        'replyMessage' => $this->replyMessage,
                        'credit' => $this->credit,
                    ]);
    }
}
