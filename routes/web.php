<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'index'])->name('register');


Route::get('/registers', function () {
	return view('auth.register');
})->name('password.request');

Route::get('/dashboard', function () {
	return view('dashboard');
})->name('dashboard');

Route::controller(ProductController::class)->group(function () {
	Route::get('/products', 'index')->name('products.index');
});

Route::get('/inventory', function () {
	return view('inventory');
})->name('inventory');

Route::get('/orders', function () {
	return view('orders');
})->name('orders');

Route::get('/suppliers', function () {
	return view('suppliers');
})->name('suppliers');

Route::get('/categories', function () {
	return view('categories');
})->name('categories');

Route::get('/reports', function () {
	return view('reports');
})->name('reports');

Route::get('/settings', function () {
	return view('settings');
})->name('settings');
