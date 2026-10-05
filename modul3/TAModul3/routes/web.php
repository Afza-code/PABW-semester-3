<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanBanjirController;
use App\Http\Controllers\DesaKitaController;


Route::get('/', [LaporanBanjirController::class, 'create'])->name('home');


Route::get('/laporan', [LaporanBanjirController::class, 'create'])->name('laporan.create');
Route::post('/laporan', [LaporanBanjirController::class, 'store'])->name('laporan.store');
Route::get('/laporan/konfirmasi', [LaporanBanjirController::class, 'konfirmasi'])->name('laporan.konfirmasi');
Route::get('/laporan/daftar', [LaporanBanjirController::class, 'index'])->name('laporan.index');


Route::get('/ta', [DesaKitaController::class, 'form'])->name('ta.form');
Route::post('/ta', [DesaKitaController::class, 'tampil'])->name('ta.store');
Route::get('/ta/hasil', [DesaKitaController::class, 'hasil'])->name('ta.hasil');
Route::get('/ta/dashboard', [DesaKitaController::class, 'dashboard'])->name('ta.dashboard');
