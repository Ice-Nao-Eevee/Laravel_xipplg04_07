<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});