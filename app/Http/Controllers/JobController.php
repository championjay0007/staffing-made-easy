<?php

namespace App\Http\Controllers;

use App\Models\Job; // Import the Job model
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of jobs.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Fetch jobs with optional filtering
        $query = Job::query();

        // Filter by job title if provided
        if ($request->has('title')) {
            $query->where('title', 'LIKE', '%' . $request->input('title') . '%');
        }

        // Fetch all jobs or filtered jobs
        $jobs = $query->get();

        return view('jobs.index', compact('jobs'));
    }
}
