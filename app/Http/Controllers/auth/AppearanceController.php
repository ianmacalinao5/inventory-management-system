<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AppearanceRequest;
use Illuminate\Http\Request;

class AppearanceController extends Controller
{
	public function index()
	{
		return view('user.appearance');
	}

	public function update(AppearanceRequest $request)
	{

		$request->user()->update([
			'theme_mode' => $request->theme_mode,
		]);

		flash()->success('Appearance settings updated successfully.');
		return redirect()->route('profile.appearance.index');
	}
}
