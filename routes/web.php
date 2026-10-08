<?php

use Illuminate\Support\Facades\Route;

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

// Route untuk menampilkan halaman dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route untuk menampilkan daftar film
Route::get('/films', function () {
    return view('films');
});

// Route untuk menampilkan halaman tentang kami
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

// Route untuk menampilkan halaman tentang kami
Route::get('/harga', function () {
    return view('harga');
});

// Route untuk menampilkan nama kelas
Route::get('/kelas', function () {
    return 'Kelas PWeb KSI';
});
