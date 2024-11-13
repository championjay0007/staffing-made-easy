<?php

// app/Http/Controllers/ContactController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Mail\ContactFormMail;
use App\Mail\ReplyContactMail;

class ContactController extends Controller
{
    public function index()
    {
        // Retrieve all contacts, ordered by creation date (newest first)
        $contacts = Contact::latest()->paginate(10); // Pagination for better display

        return view('emails.contact_form', compact('contacts')); // Changed 'contact' to 'contacts'
    }

    public function submit(Request $request)
    {
        // Validate form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:15',
            'location' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:500'
        ]);

        // Save form data to the database
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->location = $request->location;
        $contact->message = $request->message;
        $contact->save();

        // Optionally send an email
        Mail::to(config('mail.from.address'))->send(new ContactFormMail($contact));

        // Redirect with a success message
        return redirect()->back()->with('success', 'Thank you for reaching out! We will get back to you soon.');
    }



    public function reply($id)
{
    // Fetch the contact to whom the reply will be sent
    $contact = Contact::findOrFail($id);
    
    // Return the reply form with the contact information
    return view('emails.reply_form', compact('contact'));
}

public function replySubmit(Request $request, $id)
{
    // Validate the reply message input
    $request->validate([
        'reply_message' => 'required|string|max:500',
        'credit' => 'required|string|max:255', // Validate credit input
    ]);

    // Fetch the contact to whom the reply will be sent
    $contact = Contact::findOrFail($id);

    // Optionally, send the reply via email
    try {
        // Ensure all three parameters are passed to the constructor
        Mail::to($contact->email)->send(new ReplyContactMail($contact, $request->reply_message, $request->credit));
    } catch (\Exception $e) {
        \Log::error('Mail could not be sent: ' . $e->getMessage());
        return redirect()->back()->with('error', 'There was an issue sending your reply. Please try again later.');
    }

    // Redirect back with a success message
    return redirect()->route('contacts.index')->with('success', 'Your reply has been sent successfully!');
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

