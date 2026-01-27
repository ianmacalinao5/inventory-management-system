<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Redirect root
|--------------------------------------------------------------------------
*/

Route::redirect('/', '/login');

/*
|--------------------------------------------------------------------------
| Guest Routes
|--------------------------------------------------------------------------
*/
require __DIR__ . '/auth/guest.php';

/*
|--------------------------------------------------------------------------
| Authenticated Routes
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
	require __DIR__ . '/dashboard.php';
	require __DIR__ . '/inventory.php';
	require __DIR__ . '/orders.php';
	require __DIR__ . '/reports.php';
	require __DIR__ . '/settings.php';
	require __DIR__ . '/auth/profile.php';
});
