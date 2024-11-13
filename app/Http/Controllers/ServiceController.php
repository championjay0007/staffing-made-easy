<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display the list of services.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch services from database if needed
        // $services = Service::all();

        return view('services.index'); // Pass $services if needed
    }

    /**
     * Handle a request for a specific service.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function handleRequest(Request $request)
    {
        // Process the request data, e.g., for inquiries
        // You might validate and save the request here

        return redirect()->back()->with('success', 'Request submitted successfully!');
    }
}