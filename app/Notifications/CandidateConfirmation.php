<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CandidateConfirmation extends Notification
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
                    ->greeting("Hello, {$this->candidate->first_name}!")
                    ->subject("Registration Confirmation")
                    ->line("Thank you for registering with us.")
                    ->line("We have received your information, and our team will review it shortly.")
                    ->line("If you have any questions, feel free to reach out.")
                    ->line("We look forward to connecting with you!")
                    ->action('Visit Our Website', url('/'))
                    ->line('Thank you for choosing our services!');
    }
}
