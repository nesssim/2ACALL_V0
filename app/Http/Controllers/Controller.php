<?php

namespace App\Http\Controllers;

abstract class Controller
{public function dashboard()
{
    $stats = [
        'total_jobs' => \App\Models\JobOffer::count(),
        'active_jobs' => \App\Models\JobOffer::active()->count(),
        'total_messages' => \App\Models\ContactMessage::count(),
        'unread_messages' => \App\Models\ContactMessage::unread()->count(),
    ];
    $latestMessages = \App\Models\ContactMessage::latest()->take(5)->get();

    return view('dashboard', compact('stats', 'latestMessages'));
}
}
