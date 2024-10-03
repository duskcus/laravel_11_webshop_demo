<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;


// STANDARD
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('authentication.dashboard');
})->name('dashboard');

Route::get('/profile', function () {
    return view('account.profile');
})->name('profile');

Route::get('/settings', function () {
    return view('account.settings');
})->name('settings');

Route::get('/checkout', function () {
    return view('checkout.index');
})->name('checkout');

Route::get('/calendar', function () {
    return view('calendar.index');
})->name('calendar');

// RESOURCES
Route::resource('products', ProductController::class);

// LOGIN
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// REGISTER
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// LOGOUT
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/api', [ProductController::class, 'api']);
