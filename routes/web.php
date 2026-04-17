<?php

use App\Http\Controllers\Auth\ClientAuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', fn () => view('pages.about.about'))->name('about');
Route::get('/contact', fn () => view('pages.contact.contact'))->name('contact');
Route::get('/training-courses', fn () => view('pages.training-courses.training-courses'))->name('training-courses');
Route::get('/training-courses/{id}', fn ($id) => view('pages.course-details.course-details', ['id' => $id]))->name('course-details');

// Auth routes
Route::get('/login', [ClientAuthController::class, 'showLogin'])->name('login')->middleware('guest:client');
Route::post('/login', [ClientAuthController::class, 'login'])->name('login.post');
Route::get('/register', [ClientAuthController::class, 'showRegister'])->name('register')->middleware('guest:client');
Route::post('/register', [ClientAuthController::class, 'register'])->name('register.post');
Route::post('/logout', [ClientAuthController::class, 'logout'])->name('logout');

// Protected routes
Route::get('/profile', fn () => view('pages.profile.profile'))->name('profile')->middleware('auth:client');
