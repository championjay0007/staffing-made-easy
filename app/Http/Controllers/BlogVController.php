<?php

// BlogController.php
namespace App\Http\Controllers;

use App\Models\Post;

class BlogVController extends Controller
{
    // Show list of blog posts
    public function index()
    {
        $posts = Post::paginate(6); // Paginate with 6 items per page, adjust as needed
        return view('blog.index', compact('posts'));
    }


    // public function index()
    // {
    //     $posts = Post::latest()->take(6)->get();
    //     return view('blog.index', compact('posts'));
    // }

    // Show a single blog post
    public function show($id)
    {
        // Find the blog post by ID
        $post = Post::findOrFail($id);
        
        // Pass the post data to the view
        return view('blog.show', compact('post'));
    }
}