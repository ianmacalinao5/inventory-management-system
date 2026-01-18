<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Redirect root
|--------------------------------------------------------------------------
*/

Route::redirect('/', '/login');

/*
|--------------------------------------------------------------------------
| Guest Routes (Unauthenticated)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {

	// Login
	Route::controller(LoginController::class)->group(function () {
		Route::get('/login', 'index')->name('login');
		Route::post('/login', 'authenticate')->name('login.authenticate');
	});

	// Register
	Route::get('/register', [RegisterController::class, 'index'])
		->name('register');

	// Password Reset
	Route::controller(ResetPasswordController::class)->group(function () {
		Route::get('/forgot-password', 'index')->name('password.request');
		Route::post('/forgot-password', 'sendResetLinkEmail')->name('password.email');
		Route::get('/reset-password/{token}', 'showResetForm')->name('password.reset');
		Route::post('/reset-password', 'reset')->name('password.update');
	});
});

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

	// Logout
	Route::post('/logout', [LoginController::class, 'logout'])
		->name('logout');

	// Dashboard
	Route::view('/dashboard', 'dashboard')
		->name('dashboard');

	// Products
	Route::controller(ProductController::class)->group(function () {
		Route::get('/products', 'index')->name('products.index');
	});

	// Inventory & Other Pages
	Route::view('/inventory', 'inventory')->name('inventory');
	Route::view('/orders', 'orders')->name('orders');
	Route::view('/suppliers', 'suppliers')->name('suppliers');
	Route::view('/categories', 'categories')->name('categories');
	Route::view('/reports', 'reports')->name('reports');
	Route::view('/settings', 'settings')->name('settings');
});
