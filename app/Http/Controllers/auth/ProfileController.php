<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ChangePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
	public function showProfile()
	{
		return view('user.profile');
	}
	public function update(Request $request)
	{

		$validated = $request->validate([
			'name' => 'required|string|max:255',
		]);

		$user = Auth::user();
		$user->name = $validated['name'];
		$user->save();

		flash()->success('Your profile has been updated successfully.');
		return redirect()->route('profile.show');
	}

	public function showChangePassword()
	{
		return view('user.change-password');
	}

	public function changePassword(ChangePasswordRequest $request)
	{
		if (!Hash::check($request->current_password, $request->user()->password)) {
			return back()->withErrors(['current_password' => 'The current password is incorrect.']);
		}

		$request->user()->update([
			'password' => Hash::make($request->new_password),
		]);

		flash()->success('Your password has been changed successfully.');
		return redirect()->route('profile.show');
	}
}
