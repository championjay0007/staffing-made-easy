<?php

namespace App\Jobs;

use App\Models\Message;
use App\Models\Candidate;
use App\Notifications\MessageToCandidates;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification as NotificationFacade;

class SendMessageJob implements ShouldQueue
{
    use Dispatchable, Queueable;

    protected $message;
    protected $candidates;

    public function __construct($messageContent, $candidates)
{
    $this->messageContent = $messageContent;
    $this->candidates = $candidates;
}

public function handle()
{
    $candidates = $this->candidates ? Candidate::whereIn('id', $this->candidates)->get() : Candidate::all();

    // Send notification with the message content
    Notification::send($candidates, new MessageToCandidates($this->messageContent));
}
}
