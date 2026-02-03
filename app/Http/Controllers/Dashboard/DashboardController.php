<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use IcehouseVentures\LaravelChartjs\Facades\Chartjs;

class DashboardController extends Controller
{
	public function index()
	{
		$ordersChart = Chartjs::build()
			->name('ordersChart')
			->type('line')
			->size(['width' => 400, 'height' => 200])
			->labels(['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'])
			->datasets([
				[
					'label' => 'Orders',
					'data' => [5, 8, 6, 10, 7, 12, 9],
				]
			])
			->options([]);

		$stockChart = Chartjs::build()
			->name('stockChart')
			->type('bar')
			->size(['width' => 400, 'height' => 200])
			->labels(['Laptop', 'Mouse', 'Keyboard', 'Monitor', 'Printer'])
			->datasets([
				[
					'label' => 'Stock Qty',
					'data' => [50, 120, 80, 40, 25],
				]
			])
			->options([]);

		return view('dashboard.index', compact('ordersChart', 'stockChart'));
	}
}
