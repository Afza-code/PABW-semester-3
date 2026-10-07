<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LaporanBanjirController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentController::class, 'index'])->name('students.index');

Route::get('/laporan', [LaporanBanjirController::class, 'index'])->name('laporan.index');
Route::get('/laporan/create', [LaporanBanjirController::class, 'create'])->name('laporan.create');
Route::post('/laporan', [LaporanBanjirController::class, 'store'])->name('laporan.store');




