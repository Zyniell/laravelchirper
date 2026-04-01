<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;

// Rute Publik: Siapapun bisa melihat daftar Chirp
Route::get('/', [ChirpController::class, 'index']);

// Rute Terproteksi: Hanya untuk pengguna yang sudah login
Route::middleware('auth')->group(function () {
    Route::post('/chirps', [ChirpController::class, 'store']);
    Route::get('/chirps/{chirp}/edit', [ChirpController::class, 'edit']);
    Route::put('/chirps/{chirp}', [ChirpController::class, 'update']);
    Route::delete('/chirps/{chirp}', [ChirpController::class, 'destroy']);
});

// Rute Registrasi: Hanya untuk tamu (pengguna yang belum login)
Route::middleware('guest')->group(function () {
    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', Register::class);
});

// Login routes
Route::view('/login', 'auth.login')
->middleware('guest')
->name('login');
Route::post('/login', Login::class)
->middleware('guest');
// Logout route
Route::post('/logout', Logout::class)
->middleware('auth')
->name('logout');