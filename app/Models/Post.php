<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Specify which fields are mass-assignable
    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'image',
    ];

    // Accessor to get the full image URL
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }

    // Define a function to get the excerpt of the content
    public function getExcerptAttribute()
    {
        return substr($this->content, 0, 100) . '...';
    }
}
