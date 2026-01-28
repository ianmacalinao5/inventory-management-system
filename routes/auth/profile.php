<?php

use App\Http\Controllers\Auth\AppearanceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\LoginController;

Route::controller(ProfileController::class)->group(function () {

	Route::get('/profile', 'showProfile')
		->name('profile.show');

	Route::put('/profile', 'update')
		->name('profile.update');

	Route::get('/profile/change-password', 'showChangePassword')
		->name('profile.show.password');

	Route::put('/profile/change-password', 'changePassword')
		->name('profile.password');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::controller(AppearanceController::class)->group(function () {
	Route::get('/appearance', 'index')->name('profile.appearance.index');
	Route::put('/appearance', 'update')->name('profile.appearance.update');
});
