<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

		flash()->title('Profile Updated')->success('Your profile has been updated successfully.');
		return redirect()->route('user.profile');
	}

	public function showChangePassword()
	{
		return view('user.change-password');
	}

	public function changePassword() {}
}
