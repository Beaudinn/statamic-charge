<?php

use Illuminate\Support\Facades\Route;
use Silentz\Charge\Http\Controllers\Cp\CustomerController;
use Silentz\Charge\Http\Controllers\Cp\SettingsController;
use Silentz\Charge\Http\Controllers\Cp\SubscriptionController;

Route::name('charge.')->prefix('charge')->group(function () {
    Route::redirect('/', 'charge/subscriptions')->name('index');
    Route::prefix('subscriptions')->name('subscriptions.')->group(function () {
        Route::get('/', [SubscriptionController::class, 'index'])->name('index');
        Route::delete('/{subscription}', [SubscriptionController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('customers')->name('customers.')->group(function () {
        Route::get('/', [CustomerController::class, 'index'])->name('index');
    });

    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/edit', [SettingsController::class, 'edit'])->name('edit');
        Route::post('/', [SettingsController::class, 'update'])->name('update');
    });
});
