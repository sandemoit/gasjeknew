<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MitraDriverController;
use Illuminate\Support\Facades\Route;


Route::middleware('guest')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // Route::get('/', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::prefix('mitra')->group(function () {
        Route::get('/daftar-driver', [MitraDriverController::class, 'driverPage'])->name('mitra.driverPage');
        Route::post('/daftar-driver', [MitraDriverController::class, 'registerDriver'])->name('mitra.driverRegister');
        Route::put('/update-status', [MitraDriverController::class, 'updateStatus'])->name('driver.updateStatus');
    });
});
