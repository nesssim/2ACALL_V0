<?php

namespace App\Http\Controllers;
use App\Models\ContactMessage;
use App\Models\JobOffer;

use Illuminate\Http\Request;

class AdminController extends Controller

{
     public function dashboard()
    {
        $stats = [
            'total_jobs' => JobOffer::count(),
            'active_jobs' => JobOffer::active()->count(),
            'total_messages' => ContactMessage::count(),
            'unread_messages' => ContactMessage::unread()->count(),
        ];
        $latestMessages = ContactMessage::latest()->take(5)->get(); // Add this line

        return view('dashboard', compact('stats', 'latestMessages'));
    }
}
