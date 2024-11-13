<?php

// app/Models/Employer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Employer extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'role_type',
        'job_title',
        'job_description_path',
        'full_name',
        'company_name',
        'email',
        'contact_number',
        'additional_info',
        'start_date',      // New field
        'state',           // New field
        'job_location',    // New field
    ];
}