<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Main Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Individual Section Pages
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/skills', [PageController::class, 'skills'])->name('skills');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/blogs', [PageController::class, 'blogs'])->name('blogs');

// Legal Pages
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/sitemap', [PageController::class, 'sitemap'])->name('sitemap');


use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ContactMessageController;

// Public Contact Form Submission
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Authenticated Admin Dashboard & Contacts Routes
Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    
    // Contact Messages Management
    Route::get('/contacts', [ContactMessageController::class, 'index'])->name('admin.contacts.index');
    Route::get('/contacts/{contact}', [ContactMessageController::class, 'show'])->name('admin.contacts.show');
    Route::patch('/contacts/{contact}/read', [ContactMessageController::class, 'markAsRead'])->name('admin.contacts.read');
    Route::delete('/contacts/{contact}', [ContactMessageController::class, 'destroy'])->name('admin.contacts.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
