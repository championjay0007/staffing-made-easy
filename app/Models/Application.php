<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'candidate_id',
        'status'
    ];

    // Define relationship to Job
    public function job()
    {
        return $this->belongsTo(Job::class);
    }

    // Define relationship to Candidate
    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}