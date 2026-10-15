<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');