<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;

Route::middleware('guest')->group(function () {

	Route::controller(LoginController::class)->group(function () {
		Route::get('/login', 'index')->name('login');
		Route::post('/login', 'authenticate')->name('login.authenticate');
	});

	Route::get('/register', [RegisterController::class, 'index'])
		->name('register');

	Route::controller(ResetPasswordController::class)->group(function () {
		Route::get('/forgot-password', 'index')->name('password.request');
		Route::post('/forgot-password', 'sendResetLinkEmail')->name('password.email');
		Route::get('/reset-password/{token}', 'showResetForm')->name('password.reset');
		Route::post('/reset-password', 'reset')->name('password.update');
	});
});
