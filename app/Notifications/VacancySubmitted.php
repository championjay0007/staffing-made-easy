<?php

// app/Notifications/VacancySubmitted.php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class VacancySubmitted extends Notification
{
    use Queueable;
    public $employer;

    public function __construct($employer)
    {
        $this->employer = $employer;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New Vacancy Submitted')
            ->line("A new vacancy has been submitted by {$this->employer->company_name}.")
            ->action('View Vacancy', url('/'))
            ->line('Thank you for using our application!');
    }
}
