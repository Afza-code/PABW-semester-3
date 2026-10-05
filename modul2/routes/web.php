<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataWargaController;
use App\Http\Controllers\DesaKita;

Route::get('/tes', function () {
    return view('welcome');
});

Route::get('/', [DataWargaController::class, 'formLaporan']);

Route::post('/dashboard', [DataWargaController::class, 'dashboard']);

Route::get('/lapor', [DesaKita::class, 'lapor']);

Route::post('/tampil', [DesaKita::class, 'tampilHasil']);

