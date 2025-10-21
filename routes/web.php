<?php

use App\Http\Controllers\Auth\ForgotPassowrdController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
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

    Route::get('/olvide-contraseña', [ForgotPassowrdController::class, 'index'])->name('password');
    Route::post('/olvide-contraseña', [ForgotPassowrdController::class, 'store'])->name('password.store');

    Route::get('/recuperar-contraseña/{token}', [ResetPasswordController::class, 'index'])->name('password.reset');
    Route::post('/recuperar-contraseña', [ResetPasswordController::class, 'store'])->name('password.update');
});

Route::middleware(['auth', 'web'])->group(function () {
    Route::post('/auth/cerrar-sesion', [LogoutController::class, 'store'])->name('logout');

    Route::prefix('posts')->name('posts.')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('index');
    });
});