<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // Define the fillable fields for the model
    protected $fillable = [
        'content',       // The message content
        'scheduled_at',  // The scheduled date and time for the message
    ];

    // Define the relationship with candidates
    public function candidates()
    {
        return $this->belongsToMany(Candidate::class);
    }

    
}
