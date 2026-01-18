<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\EmailRequest;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
	public function index()
	{
		return view('auth.forgot-password');
	}

	public function sendResetLinkEmail(EmailRequest $request)
	{
		$status = Password::sendResetLink(
			$request->only('email')
		);

		if ($status !== Password::RESET_LINK_SENT) {
			throw ValidationException::withMessages([
				'email' => __($status),
			]);
		}

		return back()->with('status', __($status));
	}

	public function showResetForm(Request $request, $token = null)
	{
		return view('auth.reset-password', ['token' => $token, 'email' => $request->email]);
	}

	public function reset(Request $request)
	{
		$request->validate([
			'token' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:8|confirmed',
		]);

		$status = Password::reset(
			$request->only('email', 'password', 'password_confirmation', 'token'),
			function ($user, $password) {
				$user->forceFill([
					'password' => $password,
				])->save();
			}
		);

		if ($status !== Password::PASSWORD_RESET) {
			throw ValidationException::withMessages([
				'email' => [__($status)],
			]);
		}

		return redirect()->route('login')->with('status', __($status));
	}
}
