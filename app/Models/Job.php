<?php

// app/Models/Job.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'employer_id',
        'title',
        'description',
        'location',
        'salary',
        'type'
    ];

    // Relationship to Employer
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}