<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    // Display all industries
    public function index()
    {
        $industries = Industry::all();
        return view('industries.index', compact('industries'));
    }

    // Show the form for creating a new industry
    public function create()
    {
        return view('industries.create');
    }


    

    // Store a newly created industry in the database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'services' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $industry = new Industry($validated);

        // Handle file uploads
        if ($request->hasFile('image')) {
            $industry->image = $request->file('image')->store('industries', 'public');
        }
        if ($request->hasFile('image_2')) {
            $industry->image_2 = $request->file('image_2')->store('industries', 'public');
        }
        if ($request->hasFile('image_3')) {
            $industry->image_3 = $request->file('image_3')->store('industries', 'public');
        }

        $industry->save();

        return redirect()->route('industries.index')->with('success', 'Industry added successfully.');
    }

    // Display a specific industry
    public function show(Industry $industry)
    {
        return view('industries.show', compact('industry'));
    }

    // Show the form for editing an existing industry
    public function edit(Industry $industry)
    {
        return view('industries.edit', compact('industry'));
    }

    // Update an existing industry in the database
    public function update(Request $request, Industry $industry)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'content' => 'nullable|string',
            'services' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $industry->update($validated);

        // Handle file updates
        if ($request->hasFile('image')) {
            $industry->image = $request->file('image')->store('industries', 'public');
        }
        if ($request->hasFile('image_2')) {
            $industry->image_2 = $request->file('image_2')->store('industries', 'public');
        }
        if ($request->hasFile('image_3')) {
            $industry->image_3 = $request->file('image_3')->store('industries', 'public');
        }

        return redirect()->route('industries.index')->with('success', 'Industry updated successfully.');
    }

    // Delete an existing industry
    public function destroy(Industry $industry)
    {
        $industry->delete();
        return redirect()->route('industries.index')->with('success', 'Industry deleted successfully.');
    }
}
