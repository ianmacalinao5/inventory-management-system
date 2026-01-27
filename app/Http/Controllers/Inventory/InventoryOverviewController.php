<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventoryOverviewController extends Controller
{
	public function index()
	{
		return view('inventory.overview.index');
	}
}
