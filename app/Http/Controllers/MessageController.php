<?php
// app/Http/Controllers/MessageController.php
namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Message;
use App\Notifications\MessageToCandidates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Jobs\SendMessageJob;
use Carbon\Carbon;

class MessageController extends Controller
{
    public function create()
    {
        // Get all candidates to allow selection
        $candidates = Candidate::all();

        return view('messages.create', compact('candidates'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'content' => 'required|string|max:255',
            'scheduled_at' => 'nullable|date|after_or_equal:now',
            'candidates' => 'nullable|array', // Candidate selection (optional)
        ]);

        // Save the message
        $message = Message::create([
            'content' => $request->content,
            'scheduled_at' => $request->scheduled_at ? Carbon::parse($request->scheduled_at) : null,
        ]);

        // Attach selected candidates to the message
        if ($request->has('candidates')) {
            $message->candidates()->attach($request->candidates);
        }

        // If the message is scheduled, queue it for later
        if ($message->scheduled_at) {
            $this->dispatchMessageJob($message, $request->candidates);
        } else {
            // If the message is instant, send it now
            $this->sendMessageToCandidates($message, $request->candidates);
        }

        return redirect()->route('messages.create')->with('success', 'Message has been scheduled or sent.');
    }

    protected function sendMessageToCandidates($message, $candidates)
    {
        // Get the selected candidates or all candidates if none are selected
        $candidates = $candidates ? Candidate::whereIn('id', $candidates)->get() : Candidate::all();
    
        // Send notification only with the message content
        Notification::send($candidates, new MessageToCandidates($message->content));
    }
    
    protected function dispatchMessageJob($message, $candidates)
    {
        // Calculate delay until the scheduled time
        $delay = $message->scheduled_at->diffInSeconds(Carbon::now());
    
        // Dispatch the job to send notifications at the scheduled time
        SendMessageJob::dispatch($message->content, $candidates)->delay(now()->addSeconds($delay));
    }
}

