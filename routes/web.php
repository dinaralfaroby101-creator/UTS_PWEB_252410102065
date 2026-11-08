<?php

// Memanggil PageController dan Route agar bisa dipakai di file ini
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Buka alamat "/" -> jalankan method showLogin di PageController (menampilkan form login)
Route::get('/', [PageController::class, 'showLogin'])->name('login');

// menjalankan method login (cek username & password)
Route::post('/login', [PageController::class, 'login'])->name('login.proses');

// membuka halaman dashboard, username dibawa lewat URL (?username=...)
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

// menampilkan Halaman pengelolaan, dan menampilkan data array produk
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');

// menampilkan halaman profile, username juga dibawa lewat URL
Route::get('/profile', [PageController::class, 'profile'])->name('profile');