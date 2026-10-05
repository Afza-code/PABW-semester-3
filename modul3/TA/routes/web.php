<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laporanBanjirController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laporan', [laporanBanjirController::class, 'index'])->name('laporan.index');
Route::get('/laporan/create', [laporanBanjirController::class, 'create'])->name('laporan.create');
Route::post('/laporan', [laporanBanjirController::class, 'store'])->name('laporan.store');
