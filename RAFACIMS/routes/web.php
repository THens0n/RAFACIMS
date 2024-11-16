<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Change the root route to redirect to the login page
Route::get('/', function () {
    return redirect()->route('login');
});

//login route
Route::get('login', function () {
    return Inertia::render('Auth/Login', [
        'canResetPassword' => Route::has('password.request'),
        'status' => session('status'),
        'canRegister' => Route::has('register'),
    ]);//+
})->middleware('guest')->name('login');

// Register route (GET)
Route::get('register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

require __DIR__.'/auth.php';
