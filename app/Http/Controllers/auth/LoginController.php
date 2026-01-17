<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

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

		return redirect()->intended(route('dashboard'));
	}
}
