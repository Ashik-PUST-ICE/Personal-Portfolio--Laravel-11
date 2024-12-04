<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CVController;

// Public routes
Route::get('/', [HomeController::class, 'user'])->name('user.dashboard');

// Registration routes
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {
    // User dashboard
    Route::get('/', [HomeController::class, 'user'])->name('user.dashboard');

    // Admin dashboard
    Route::get('admin/dashboard', [HomeController::class, 'index'])
        ->middleware('admin')
        ->name('admin.dashboard');

    // Profile management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about', [HomeController::class, 'about'])->name('user.about');

Route::get('/contact', [HomeController::class, 'contact'])->name('user.contact');

Route::get('/skill', [HomeController::class, 'skill'])->name('user.skill');
Route::get('/view-cv', [CVController::class, 'showCV']);


require __DIR__.'/auth.php';







