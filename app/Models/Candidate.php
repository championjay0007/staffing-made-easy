<?php

// app/Models/Candidate.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Candidate extends Model
{
    
    use HasFactory,Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'resume_path',
        'address',
        'state',
        'qualification',
        'experience',
        "additional_info"
    ];

    /**
     * Example of a relationship, e.g., a candidate applying for multiple jobs.
     * Uncomment and modify if there’s a Job model and related table.
     */
    // public function jobs()
    // {
    //     return $this->belongsToMany(Job::class, 'job_applications');
    // }

    public function messages()
{
    return $this->belongsToMany(Message::class);
}
}
