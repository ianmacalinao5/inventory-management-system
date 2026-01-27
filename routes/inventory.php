<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Inventory\ProductController;
use App\Http\Controllers\Inventory\CategoryController;
use App\Http\Controllers\Inventory\SupplierController;
use App\Http\Controllers\Inventory\InventoryOverviewController;

Route::controller(InventoryOverviewController::class)->group(function () {
	Route::get('/inventory', 'index')->name('inventory.index');
});

Route::controller(ProductController::class)->group(function () {
	Route::get('/products', 'index')->name('products.index');
});

Route::controller(CategoryController::class)->group(function () {
	Route::get('/categories', 'index')->name('categories.index');
});

Route::controller(SupplierController::class)->group(function () {
	Route::get('/suppliers', 'index')->name('suppliers.index');
});
