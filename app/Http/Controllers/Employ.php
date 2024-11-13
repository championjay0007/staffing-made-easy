<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Industry;


class Employ extends Controller
{
    /**
     * Show the application homepage.
     *
     * @return \Illuminate\View\View
     */

    

    public function index()
    {
        $industries = Industry::all();
        // You can pass data to the view if needed
        return view('employer', compact('industries'));
       
    }
}