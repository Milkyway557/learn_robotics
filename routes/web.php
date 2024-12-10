<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;

Route::middleware(['auth'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Home page
Route::get('/', [PageController::class, 'index'])->name('home');

// Courses routes
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index'); // List all courses
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create'); // Show form to create a course
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store'); // Store a new course
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show'); // Show a single course

// Route to show the contact form
Route::get('/contact', [ContactController::class, 'show'])->name('contact');

// Route to handle the form submission
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// Static pages
Route::get('/services', [PageController::class, 'services'])->name('services'); // Services page
Route::get('/contact', [PageController::class, 'contact'])->name('contact'); // Contact page

// Routes for authenticated users only
Route::middleware('auth')->group(function () {
    // Account page
    Route::get('/account', [AccountController::class, 'show'])->name('account.show');

    // Profile management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Taking a course
    Route::post('/courses/{course}/take', [CourseController::class, 'takeCourse'])->name('courses.take');
});

// Breeze authentication routes (These should be handled by Breeze)
require __DIR__ . '/auth.php';  // This includes routes like login, register, logout
