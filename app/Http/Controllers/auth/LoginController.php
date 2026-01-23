<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function index()
	{
		return view('auth.login');
	}

	public function authenticate(LoginRequest $request)
	{
		$credentials = $request->validated();

		if (!Auth::attempt($credentials, $request->boolean('remember'))) {
			return back()
				->with('authError', 'Invalid email or password.');
		}

		$request->session()->regenerate();

		flash()->success('You have logged in successfully.');
		return redirect()->intended(route('dashboard'));
	}

	public function logout(Request $request)
	{
		Auth::logout();

		$request->session()->invalidate();
		$request->session()->regenerateToken();

		flash()->success('You have been logged out successfully.');
		return redirect()->route('login');
	}
}
