<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CandidateRegistered extends Notification
{
    use Queueable;

    public $candidate;

    public function __construct($candidate)
    {
        $this->candidate = $candidate;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->greeting("Hello, Admin!")
                    ->line("A new candidate has registered:")
                    ->line("Name: {$this->candidate->first_name} {$this->candidate->last_name}")
                    ->line("State: {$this->candidate->state}")
                    ->line("Email: {$this->candidate->email}")
                    ->action('Respond to Candidate', url("/candidates/{$this->candidate->id}"))
                    ->line('Thank you for using our application!');
    }
}
