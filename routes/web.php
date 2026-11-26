<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk menampilkan halaman welcome
Route::get('/welcome', function () {
    return view('welcome');
});

// Route untuk menampilkan nama mahasiswa
Route::get('/nama', function () {
    return 'Alfian Gading';
});

// Route untuk menampilkan NIM mahasiswa
Route::get('/nim', function () {
    return '5230411121';
});

// Route untuk menampilkan nama kelas
Route::get('/kelas', function () {
    return 'Kelas PWeb KSI';
});

Route::middleware('auth')->group(function () {
    // Route untuk menampilkan halaman dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // Route untuk menampilkan daftar film
    Route::get('/films', [FilmController::class, 'index'])->name('films');
    Route::get('/films/create', [FilmController::class, 'create'])->name('films.create');
    Route::post('/films', [FilmController::class, 'store'])->name('films.store');
    Route::get('/films/{film}/edit', [FilmController::class, 'edit'])->name('films.edit');
    Route::put('/films/{film}', [FilmController::class, 'update'])->name('films.update');
    Route::delete('/films/{film}', [FilmController::class, 'destroy'])->name('films.destroy');
    Route::get('/films/{film}', [FilmController::class, 'show']);

    // Route untuk menampilkan halaman tentang kami
    Route::get('/tentang-kami', [DashboardController::class, 'tentangKami'])->name('tentangKami');

    // Route untuk menampilkan halaman harga
    Route::get('/harga', [DashboardController::class, 'harga'])->name('harga');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'auth'])->name('auth');
