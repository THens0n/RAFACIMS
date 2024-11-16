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

require __DIR__.'/auth.php';
