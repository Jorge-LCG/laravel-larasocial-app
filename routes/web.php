<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Post\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('posts.index');
    }

    return redirect()->route('login');
});

Route::middleware(['guest', 'web'])->prefix('auth')->group(function () {
    Route::get('/iniciar-sesion', [LoginController::class, 'index'])->name('login');
    Route::post('/iniciar-sesion', [LoginController::class, 'store'])->name('login.store');

    Route::get('/registrar-cuenta', [RegisterController::class, 'index'])->name('register');
    Route::post('/registrar-cuenta', [RegisterController::class, 'store'])->name('register.store');
});

Route::middleware(['auth', 'web'])->group(function () {
    Route::post('/auth/cerrar-sesion', [LogoutController::class, 'store'])->name('logout');

    Route::prefix('posts')->name('posts.')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('index');
    });
});