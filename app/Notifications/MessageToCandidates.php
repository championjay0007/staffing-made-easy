<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MessageToCandidates extends Notification
{
    use Queueable;

    public $messageContent;

    /**
     * Create a new notification instance.
     *
     * @param  string  $messageContent
     */
    public function __construct($messageContent)
    {
        $this->messageContent = $messageContent;
    }

    /**
     * Determine the delivery channels for the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject("New Message from Our Team")
                    ->greeting("Hello, {$notifiable->first_name}!")
                    ->line($this->messageContent)
                    ->line("If you have any questions or need further assistance, feel free to reach out.")
                    ->action('Visit Our Website', url('/'))
                    ->line('Thank you for staying connected with us!');
    }
}