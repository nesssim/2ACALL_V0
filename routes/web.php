<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobOfferController;
use App\Http\Controllers\ContactMessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index'])->name('home');




// Route pour traiter les messages de contact (accessible à tous)
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');

// Routes protégées par authentification
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/contact-messages', [ContactMessageController::class, 'index'])->name('admin.contact-messages');
    Route::patch('/contact-messages/{contactMessage}/status', [ContactMessageController::class, 'updateStatus'])->name('admin.contact-messages.update-status');
    Route::patch('/contact-messages/{contactMessage}/read', [ContactMessageController::class, 'markAsRead'])->name('admin.contact-messages.read');
    Route::patch('/contact-messages/{contactMessage}/treated', [ContactMessageController::class, 'markAsTreated'])->name('admin.contact-messages.treated');
    Route::patch('/contact-messages/{contactMessage}/close', [ContactMessageController::class, 'close'])->name('admin.contact-messages.close');
});
// Routes admin (Dashboard et gestion)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');    

    // Gestion des offres d'emploi
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('job-offers', JobOfferController::class);
        Route::patch('job-offers/{jobOffer}/toggle', [JobOfferController::class, 'toggle'])->name('job-offers.toggle');
        
        Route::resource('contact-messages', ContactMessageController::class)->only(['index', 'show', 'update', 'destroy']);
    });
});

require __DIR__.'/auth.php';