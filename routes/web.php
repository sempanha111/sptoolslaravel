<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index']);
});
