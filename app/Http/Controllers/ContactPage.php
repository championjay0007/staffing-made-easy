<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Contact;

use Illuminate\Http\Request;

class ContactPage extends Controller
{
    /**
     * Show the application homepage.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $contacts = Contact::all();
        $posts = Post::all();
        
        // // Debugging
        // dd($contacts, $posts);
        
        return view('contactpg', [
            'posts' => $posts,
            'contacts' => $contacts,
        ]);
  
    }



    public function delete($id)
    {
        // Find and delete the contact
        $contact = Contact::findOrFail($id);
        $contact->delete();

        // Redirect back with a success message
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }

    // Delete all contacts
    public function deleteAll()
    {
        // Delete all contacts from the database
        Contact::truncate();

        // Redirect back with a success message
        return redirect()->route('contacts.index')->with('success', 'All contacts deleted successfully.');
    }
}