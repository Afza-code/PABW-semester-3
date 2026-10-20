<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanBanjirController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'index'])->name('students.index');

// Halaman pelaporan warga: tetap dapat diakses tanpa login.
Route::get('/laporan/create', [LaporanBanjirController::class, 'create'])->name('laporan.create');
Route::post('/laporan', [LaporanBanjirController::class, 'store'])->name('laporan.store');

// Auth Routes
Route::get('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');

// Protected Routes: hanya petugas yang sudah login yang boleh mengakses.
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/laporan', [LaporanBanjirController::class, 'index'])->name('laporan.index');
});
