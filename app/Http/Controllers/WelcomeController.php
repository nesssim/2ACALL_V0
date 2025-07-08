<?php

namespace App\Http\Controllers;

use App\Models\JobOffer;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Fetch active job offers for the welcome page
        $jobOffers = JobOffer::active()
            ->latest()
            ->limit(6) // Limit to 6 offers for better display
            ->get();

        return view('welcome', compact('jobOffers'));
    }
}