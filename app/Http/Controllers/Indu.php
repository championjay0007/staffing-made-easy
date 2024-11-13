<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Contact;
use App\Models\Industry;

class Indu extends Controller
{
    /**
     * Show the application homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index()
{
    // Fetching all industries
    $contacts = Contact::all();
    $posts = Post::all();
    $industries = Industry::all(); // Add this line to fetch industries from the database

    return view('indu', [
        'posts' => $posts,
        'contacts' => $contacts,
        'industries' => $industries, // Pass industries to the view
    ]);
}
}