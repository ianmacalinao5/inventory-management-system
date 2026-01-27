<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Reports\ReportController;

Route::controller(ReportController::class)->group(function () {
	Route::get('/reports', 'index')->name('reports.index');
});
