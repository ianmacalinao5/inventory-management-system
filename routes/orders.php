<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Orders\OrderController;

Route::controller(OrderController::class)->group(function () {
	Route::get('/orders', 'index')->name('orders.index');
});
