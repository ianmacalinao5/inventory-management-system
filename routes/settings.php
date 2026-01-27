<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Settings\SettingsController;

Route::controller(SettingsController::class)->group(function () {
	Route::get('/settings', 'index')->name('settings.index');
});
