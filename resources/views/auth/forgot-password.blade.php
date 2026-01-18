@section('title', 'Reset Password')

<x-layout.auth>
	<div class="px-4 py-2">

		<div class="md:hidden text-center mb-6">
			<x-heroicon-o-archive-box class="w-10 h-10 mx-auto text-sky-600" />
			<h1 class="text-xl font-semibold mt-2">
				Inventory Management System
			</h1>
		</div>



		<form action="{{ route('password.email') }}" method="POST" x-data="{ resetLoading: false }"
			@submit="resetLoading = true" class="space-y-6">
			@csrf

			<h2 class="text-xl mb-5">Reset Password</h2>

			@if (session('status'))
				<p class="text-sm text-green-600 text-center p-3 bg-green-100 rounded">
					{{ session('status') }}
				</p>
			@endif

			<div class="space-y-1 mb-4">
				<label for="email" class="text-sm font-medium text-gray-700">
					Email
				</label>

				<input id="email" type="email" name="email" value="{{ old('email') }}" autofocus
					placeholder="email@example.com" class="w-full px-4 py-2 border rounded-lg
                        focus:outline-none focus:ring-1
                        @error('email') border-red-500 focus:ring-red-500 @enderror">

				@error('email')
					<p class="text-sm text-red-600">{{ $message }}</p>
				@enderror
			</div>

			<button type="submit" :disabled="resetLoading" class="w-full bg-sky-600 text-white py-2 rounded-lg
                       hover:bg-sky-700 transition font-semibold
                       disabled:opacity-60 disabled:cursor-not-allowed">
				<span x-show="!resetLoading">Send Link</span>
				<span x-show="resetLoading">Sending Link…</span>
			</button>

			<div class="text-sm text-center">
				<a href="{{ route('login') }}" class="text-sky-600 hover:underline">
					Back to Login
				</a>
			</div>
		</form>
	</div>
</x-layout.auth>