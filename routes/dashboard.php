<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;

Route::controller(DashboardController::class)->group(function () {
	Route::get('/dashboard', 'index')->name('dashboard.index');
});
