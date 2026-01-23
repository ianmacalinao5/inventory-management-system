@section('title', 'Reset Password')

<x-layout.auth>
	<div class="px-4 py-2">

		<div class="md:hidden text-center mb-6">
			<x-heroicon-o-archive-box class="w-10 h-10 mx-auto text-sky-600" />
			<h1 class="text-xl font-semibold mt-2">
				Inventory Management System
			</h1>
		</div>



		<form action="{{ route('password.email') }}" method="POST" x-data="{ loading: false }" @submit="loading = true"
			class="space-y-6">
			@csrf

			<h2 class="text-xl mb-5">Reset Password</h2>

			@if (session('status'))
				<p class="text-sm text-green-600 text-center p-3 bg-green-100 rounded">
					{{ session('status') }}
				</p>
			@endif

			<div class="space-y-1 mb-4">
				<x-label for="email" title="Email" />
				<x-input type="email" name="email" id="email" placeholder="email@example.com"
					:error="$errors->has('email')" />
				@error('email') <p class="text-sm text-red-600">{{ $message }}</p>
				@enderror
			</div>

			<x-button type="submit" title="Send Link" loadingTitle="Sending Link…" class="w-full" />

			<div class="text-sm text-center">
				<a href="{{ route('login') }}" class="text-sky-600 hover:underline">
					Back to Login
				</a>
			</div>
		</form>
	</div>
</x-layout.auth>