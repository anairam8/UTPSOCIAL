<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    Route::post('/profile', [UserController::class, 'store']);
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
    Route::get('/{user:username}', [PostController::class, 'index'])->name('post');
});