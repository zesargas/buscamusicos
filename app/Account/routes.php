<?php

use Illuminate\Support\Facades\Route;
use App\Account\Controllers\LoginController;
use App\Account\Controllers\AuthController;



Route::middleware('web')->group(function () {
    // Login
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    // Register
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard protegido
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('account::dashboard');
        })->name('dashboard');

        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});
