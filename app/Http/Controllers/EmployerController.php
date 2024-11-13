<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;
use App\Notifications\VacancySubmitted;
use App\Notifications\EmployerConfirmation;
use Illuminate\Support\Facades\Notification;


class EmployerController extends Controller
{
    // Show all employers
    public function index()
    {
        $employers = Employer::all();
        return view('employers.index', compact('employers'));
    }

    // Show form to create new employer
    public function create()
    {
        return view('employers.create');
    }


    public function jobDetails($id)
{
    $employer = Employer::findOrFail($id);
    return view('employers.job_details', compact('employer'));
}


public function jobListings(Request $request)
{
    $query = Employer::query();

    if ($request->has('search')) {
        $search = $request->input('search');
        $query->where('job_title', 'LIKE', "%$search%")
              ->orWhere('company_name', 'LIKE', "%$search%")
              ->orWhere('job_location', 'LIKE', "%$search%");
    }

    $employers = $query->get();

    return view('employers.job_listings', compact('employers'));
}


    // Store a new employer
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'role_type' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'job_description' => 'nullable|file|mimes:pdf,docx|max:5120', // 5 MB max
            'full_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_number' => 'required|string|max:20',
            'additional_info' => 'nullable|string',
            'start_date' => 'nullable|date',           // New field validation
            'state' => 'nullable|string|max:255',      // New field validation
            'job_location' => 'nullable|string|max:255' // New field validation
            
        ]);

        // Handle file upload
        $path = null;
        if ($request->hasFile('job_description')) {
            $path = $request->file('job_description')->store('job_descriptions', 'public');
        }

        // Save employer data
        $employer = Employer::create([
          'role_type' => $request->role_type,
    'job_title' => $request->job_title,
    'job_description_path' => $path,
    'full_name' => $request->full_name,
    'company_name' => $request->company_name,
    'email' => $request->email,
    'contact_number' => $request->contact_number,
    'additional_info' => $request->additional_info,
    'start_date' => $request->start_date,      // New field
    'state' => $request->state,                // New field
    'job_location' => $request->job_location,  // New field

        ]);

        // Send notification
        $employer->notify(new EmployerConfirmation($employer));
        Notification::route('mail', 'james@erideglobal.org')->notify(new VacancySubmitted($employer));

        return redirect()->back()->with('success', 'Registration successful!');
    }

    // Display a single employer
    public function show($id)
    {
        $employer = Employer::findOrFail($id);
        return view('employers.show', compact('employer'));
    }

    // Show form to edit an employer
    public function edit($id)
    {
        $employer = Employer::findOrFail($id);
        return view('employers.edit', compact('employer'));
    }

    // Update an employer
    public function update(Request $request, $id)
    {
        $employer = Employer::findOrFail($id);

        $request->validate([
            'role_type' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'job_description' => 'nullable|file|mimes:pdf,docx|max:5120', // 5 MB max
            'full_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'contact_number' => 'required|string|max:20',
            'additional_info' => 'nullable|string',
        ]);

        // Handle file upload
        if ($request->hasFile('job_description')) {
            $path = $request->file('job_description')->store('job_descriptions', 'public');
            $employer->job_description_path = $path;
        }

        $employer->update([
            'role_type' => $request->role_type,
            'job_title' => $request->job_title,
            'full_name' => $request->full_name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'additional_info' => $request->additional_info,
        ]);

        return redirect()->route('employers.index')->with('success', 'Employer updated successfully!');
    }

    // Delete an employer
    public function destroy($id)
    {
        $employer = Employer::findOrFail($id);
        $employer->delete();

        return redirect()->route('employers.index')->with('success', 'Employer deleted successfully!');
    }
}
