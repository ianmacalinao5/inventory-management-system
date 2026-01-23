@section('title', 'Login')

<x-layout.auth>
	<div class="w-full max-w-md bg-white p-8 rounded-xl">

		<div class="md:hidden text-center mb-6">
			<x-heroicon-o-archive-box class="w-10 h-10 mx-auto text-sky-600" />
			<h1 class="text-xl font-semibold mt-2">
				Inventory Management System
			</h1>
		</div>

		<form method="POST" action="{{ route('login.authenticate') }}" class="space-y-6" x-data="{ loading: false }"
			@submit="loading = true">
			@csrf

			<h2 class="text-2xl font-bold text-gray-800 text-center">
				Login
			</h2>

			@if (session('status'))
				<p class="text-sm text-green-600 text-center p-3 bg-green-100 rounded">
					{{ session('status') }}
				</p>
			@endif

			@if (session('authError'))
				<p class="text-sm text-red-600 text-center p-3 bg-red-100 rounded">
					{{ session('authError') }}
				</p>
			@endif

			<div class="space-y-1">
				<x-label for="email" title="Email" />
				<x-input type="email" id="email" name="email" placeholder="email@example.com"
					:error="$errors->has('email')" />
				@error('email')
					<p class="text-sm text-red-600">{{ $message }}</p>
				@enderror
			</div>

			<div class="space-y-1">
				<x-label for="password" title="Password" />
				<x-password-input id="password" name="password" placeholder="••••••••" :error="$errors->has('password')"
					autocomplete="off" />

				@error('password')
					<p class="text-sm text-red-600">{{ $message }}</p>
				@enderror
			</div>


			<div class="flex items-center justify-between text-sm">
				<label class="flex items-center gap-2">
					<input type="checkbox" name="remember"
						class="rounded border-gray-300 text-sky-600 focus:ring-sky-500">
					Remember me
				</label>

				<a href="{{ route('password.request') }}" class="text-sky-600 hover:underline">
					Forgot password?
				</a>
			</div>

			<x-button type="submit" title="Sign in" loadingTitle="Signing in…" class="w-full" />

		</form>
	</div>
</x-layout.auth>