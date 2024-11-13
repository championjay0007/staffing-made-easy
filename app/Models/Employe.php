<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'industry',
        'contact_person',
        'email',
        'phone',
        'address'
    ];

    // Define relationships if needed, e.g., an employer might have many jobs
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
