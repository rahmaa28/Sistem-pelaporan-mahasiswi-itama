<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('dosen', DosenController::class);

Route::get('/', function () {
    return "Sistem Pelaporan Masalah - Teknik Informatika";
});


Route::get('/daftar', function () {
    return "List Daftar Masalah";
});
Route::get('/laporan', [LaporanController::class, 'index']);
Route::get('/cari', [LaporanController::class, 'search']);
Route::get('/rincian', [LaporanController::class, 'detail']);