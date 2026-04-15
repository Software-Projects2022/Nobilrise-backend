<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('pages.home'))->name('home');
Route::get('/about', fn () => view('pages.about.about'))->name('about');
Route::get('/contact', fn () => view('pages.contact.contact'))->name('contact');
Route::get('/training-courses', fn () => view('pages.training-courses.training-courses'))->name('training-courses');
Route::get('/training-courses/{id}', fn ($id) => view('pages.course-details.course-details', ['id' => $id]))->name('course-details');
Route::get('/login', fn () => view('pages.login.login'))->name('login');
Route::get('/profile', fn () => view('pages.profile.profile'))->name('profile');
