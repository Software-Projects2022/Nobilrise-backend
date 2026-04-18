<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\ClientAuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainingCourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', fn () => view('pages.contact.contact'))->name('contact');
Route::get('/training-courses', [TrainingCourseController::class, 'index'])->name('training-courses');
Route::get('/training-courses/{id}', [TrainingCourseController::class, 'show'])->name('course-details');

// Booking
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

// Auth routes
Route::get('/login', [ClientAuthController::class, 'showLogin'])->name('login')->middleware('guest:client');
Route::post('/login', [ClientAuthController::class, 'login'])->name('login.post');
Route::get('/register', [ClientAuthController::class, 'showRegister'])->name('register')->middleware('guest:client');
Route::post('/register', [ClientAuthController::class, 'register'])->name('register.post');
Route::post('/logout', [ClientAuthController::class, 'logout'])->name('logout');

// Protected routes
Route::get('/profile', fn () => view('pages.profile.profile'))->name('profile')->middleware('auth:client');
