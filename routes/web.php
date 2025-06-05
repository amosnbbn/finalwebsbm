<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AttendanceController;

// Tetap gunakan ini jika kamu ingin menampilkan produk di frontend /pricing
// Tapi pastikan method pricing() tetap ada di controller
Route::get('/pricing', [\App\Http\Controllers\ProductController::class, 'pricing'])->name('pricing');

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

// Bisa dihapus salah satu, karena /pricing sudah didefinisikan di atas
Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/presensi', function () {
    return view('attendance');
})->name('attendance');

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact/submit', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::post('/attedance/submit', [AttendanceController::class, 'store'])->name('attendance.store');

// Hapus semua route manual yang berkaitan dengan product
// Termasuk ini:
// Route::resource('products', ProductController::class);

// Dan juga ini:
// Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
//     Route::resource('products', App\Http\Controllers\Admin\ProductController::class);
// });

// Biarkan Filament menangani semua route admin.
