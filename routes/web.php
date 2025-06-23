<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ProductController; // Tambahkan ini jika belum

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

// ✅ hanya satu route untuk pricing
Route::get('/pricing', [ProductController::class, 'index'])->name('pricing');

Route::get('/presensi', function () {
    return view('attendance');
})->name('attendance');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact/submit', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::post('/attedance/submit', [AttendanceController::class, 'store'])->name('attendance.store');
