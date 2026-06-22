<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('/dokter', [HomeController::class, 'dokter'])->name('dokter');
Route::get('/jadwal', [HomeController::class, 'jadwal'])->name('jadwal');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::get('/daftar', [HomeController::class, 'daftar'])->name('daftar');
Route::post('/daftar', [HomeController::class, 'storeDaftar'])->name('daftar.store');