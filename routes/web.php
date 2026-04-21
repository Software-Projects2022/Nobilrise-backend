<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\ClientAuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainingCourseController;
use Illuminate\Support\Facades\Route;

// ─── Language switcher ───────────────────────────────────────────────
Route::get('/lang/{locale}', function (string $locale) {
    if (in_array($locale, ['ar', 'en'])) {
        session(['locale' => $locale]);
    }

    return redirect()->back();
})->name('lang.switch');

// ─── Main routes ─────────────────────────────────────────────────────
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/training-courses', [TrainingCourseController::class, 'index'])->name('training-courses');
Route::get('/training-courses/{id}', [TrainingCourseController::class, 'show'])->name('course-details');

Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

// ─── Auth routes ──────────────────────────────────────────────────────
Route::get('/login', [ClientAuthController::class, 'showLogin'])->name('login')->middleware('guest:client');
Route::post('/login', [ClientAuthController::class, 'login'])->name('login.post');
Route::get('/register', [ClientAuthController::class, 'showRegister'])->name('register')->middleware('guest:client');
Route::post('/register', [ClientAuthController::class, 'register'])->name('register.post');
Route::post('/logout', [ClientAuthController::class, 'logout'])->name('logout');

// ─── Protected routes ─────────────────────────────────────────────────
Route::middleware('auth:client')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password');
    Route::post('/courses/{course}/enroll', [EnrollmentController::class, 'store'])->name('courses.enroll');
});
