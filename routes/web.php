<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobOfferController;
use App\Http\Controllers\ContactMessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route pour traiter les messages de contact (accessible à tous)
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');

// Routes protégées par authentification
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes admin (Dashboard et gestion)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        $stats = [
            'total_jobs' => \App\Models\JobOffer::count(),
            'active_jobs' => \App\Models\JobOffer::active()->count(),
            'total_messages' => \App\Models\ContactMessage::count(),
            'unread_messages' => \App\Models\ContactMessage::unread()->count(),
        ];
        return view('dashboard', compact('stats'));
    })->name('dashboard');

    // Gestion des offres d'emploi
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('job-offers', JobOfferController::class);
        Route::patch('job-offers/{jobOffer}/toggle', [JobOfferController::class, 'toggle'])->name('job-offers.toggle');
        
        Route::resource('contact-messages', ContactMessageController::class)->only(['index', 'show', 'update', 'destroy']);
    });
});

require __DIR__.'/auth.php';