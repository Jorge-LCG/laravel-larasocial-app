<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'auth/iniciar-sesion');

Route::middleware(['guest', 'web'])->prefix('auth')->name('auth.')->group(function () {
    Route::get('/iniciar-sesion', [LoginController::class, 'index'])->name('login');

    Route::get('/registrar-cuenta', [RegisterController::class, 'index'])->name('register');
    Route::post('/registrar-cuenta', [RegisterController::class, 'store'])->name('register.store');
});