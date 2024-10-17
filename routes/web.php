<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('homepage', [HomepageController::class, 'index'])->name('homepage');

Route::post('homepage', [HomepageController::class, 'search'])->name('homepage');

// Registration Routes
Route::get('/register-artisan', [RegistrationController::class, 'showRegistrationForm'])->name('register.artisan');
Route::post('/register-artisan', [RegistrationController::class, 'register']);

// Login Routes
Route::get('/login-artisan', [RegistrationController::class, 'showLoginForm'])->name('login.artisan');
Route::post('/login-artisan', [RegistrationController::class, 'login']);


require __DIR__.'/auth.php';
