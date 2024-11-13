<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Notifications\CandidateRegistered;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\CandidateResponseMail;
use App\Models\Employer;
use App\Notifications\CandidateConfirmation;

class CandidateController extends Controller
{
    // Render the form to create a new candidate profile
    public function create()
    {
        $employers = Employer::all(); // Retrieve all employers or a specific set based on your requirements
        return view('candidate', compact('employers'));
    }
    // Store a new candidate profile
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:candidates,email',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'state' => 'required|string|max:255',
            'qualification' => 'nullable|string',
            'experience' => 'nullable|string',
            'additional_info' => 'nullable|string',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Handle resume upload if provided
        $resumePath = null;
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
        }

        // Create candidate
        $candidate = Candidate::create(array_merge(
            $request->all(),
            ['resume_path' => $resumePath]
        ));

        // Send notification to admin email
        $candidate->notify(new CandidateConfirmation($candidate));
        Notification::route('mail', 'james@erideglobal.org')->notify(new CandidateRegistered($candidate));
       

        return redirect()->back()->with('success', 'Registration successful!');
    }
    
    // Retrieve all candidate profiles
    public function index()
    {
        $candidates = Candidate::all();
    
        // Count candidates by state
        $candidatesByState = Candidate::selectRaw('state, COUNT(*) as count')
                                      ->groupBy('state')
                                      ->pluck('count', 'state');
    
        return view('candidates.index', compact('candidates', 'candidatesByState'));
    }

    // Show a single candidate profile
    public function show($id)
    {
        $candidate = Candidate::findOrFail($id);
        return view('candidates.show', compact('candidate'));
    }

    // Update an existing candidate profile
    public function update(Request $request, $id)
    {
        $candidate = Candidate::findOrFail($id);

        $request->validate([
            'first_name' => 'sometimes|required|string|max:255',
            'last_name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|email|unique:candidates,email,' . $candidate->id,
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'state' => 'required|string|max:255',
            'qualification' => 'nullable|string', 
            'experience' => 'nullable|string',
            'additional_info' => 'nullable|string',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        $resumePath = $candidate->resume_path; // Keep old resume path
        if ($request->hasFile('resume')) {
            // Delete old resume if needed
            Storage::disk('public')->delete($resumePath);
            $resumePath = $request->file('resume')->store('resumes', 'public');
        }

        $candidate->update(array_merge(
            $request->all(),
            ['resume_path' => $resumePath]
        ));

        return response()->json([
            'message' => 'Candidate profile updated successfully',
            'candidate' => $candidate
        ]);
    }

    // Delete a candidate profile
    public function destroy($id)
    {
        $candidate = Candidate::findOrFail($id);

        // Optionally delete the resume file
        if ($candidate->resume_path) {
            Storage::disk('public')->delete($candidate->resume_path);
        }

        $candidate->delete();

        return response()->json(['message' => 'Candidate profile deleted successfully']);
    }

    public function sendResponse(Request $request, $id)
    {
        $candidate = Candidate::findOrFail($id);
    
        // Validate the response message
        $request->validate([
            'message' => 'required|string',
        ]);
    
        // Send email to the candidate
        Mail::to($candidate->email)->send(new CandidateResponseMail($candidate, $request->message));
    
        return redirect()->route('candidates.show', $id)->with('success', 'Response sent successfully.');
    }
}
