<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SettingsController;

Route::middleware('auth')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', fn () => view('dashboard'))->name('dashboard.index');

        Route::prefix('settings')->name('settings.')->group(function () {
            Route::get('/', [SettingsController::class, 'edit'])->name('settings.edit');
            Route::patch('/{user}', [SettingsController::class, 'update'])->name('settings.update');
            Route::delete('/{user}', [SettingsController::class, 'destroy'])->name('settings.destroy');
        });
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
