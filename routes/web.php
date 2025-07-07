<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\DashboardController;

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index']);
});