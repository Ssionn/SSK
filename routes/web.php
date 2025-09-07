<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('guest')->group(function () {
    Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'authenticate'])->name('login.authenticate');

    Route::get('/register', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'index'])->name('register');
    Route::post('/register', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'registerUser'])->name('register.store');
});

require __DIR__.'/auth.php';
