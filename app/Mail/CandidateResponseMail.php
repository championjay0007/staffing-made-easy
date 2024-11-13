<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CandidateResponseMail extends Mailable
{
    use Queueable, SerializesModels;

    public $candidate;
    public $messageContent;

    public function __construct($candidate, $messageContent)
    {
        $this->candidate = $candidate;
        $this->messageContent = $messageContent;
    }

    public function build()
    {
        return $this->subject('Response to Your Application')
                    ->view('emails.candidate_response')
                    ->with([
                        'candidate' => $this->candidate,
                        'messageContent' => $this->messageContent,
                    ]);
    }
}
