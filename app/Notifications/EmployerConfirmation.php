<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmployerConfirmation extends Notification
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
                    ->greeting("Hello, {$this->employer->full_name}!")
                    ->subject("Employer Registration Confirmation")
                    ->line("Thank you for registering with us.")
                    ->line("We have received your employer information and will review it shortly.")
                    ->line("If you have any questions or need further assistance, please don't hesitate to reach out.")
                    ->line("We look forward to collaborating with you!")
                    ->action('Visit Our Website', url('/'))
                    ->line('Thank you for choosing our services!');
    }
}
