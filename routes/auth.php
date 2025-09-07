<?php

Route::middleware('auth')->group(function () {
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/', [\App\Http\Controllers\SettingsController::class, 'edit'])->name('settings.edit');
        Route::patch('/{user}', [\App\Http\Controllers\SettingsController::class, 'update'])->name('settings.update');
        Route::delete('/{user}', [\App\Http\Controllers\SettingsController::class, 'destroy'])->name('settings.destroy');
    });

    Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});
