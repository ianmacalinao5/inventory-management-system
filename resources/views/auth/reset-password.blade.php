@section('title', 'Set New Password')

<x-layout.auth>
	<div class="w-full max-w-md bg-white p-8 rounded-xl">

		<div class="md:hidden text-center mb-6">
			<x-heroicon-o-archive-box class="w-10 h-10 mx-auto text-sky-600" />
			<h1 class="text-xl font-semibold mt-2">
				Inventory Management System
			</h1>
		</div>

		<form method="POST" action="{{ route('password.update') }}" class="space-y-6" x-data="{ loading: false }"
			@submit="loading = true">

			@csrf

			<!-- Token hidden input -->
			<input type="hidden" name="token" value="{{ $token }}">

			<h2 class="text-2xl font-bold text-gray-800 text-center">
				Set New Password
			</h2>

			<!-- Email field -->
			<div class="space-y-1">
				<label for="email" class="text-sm font-medium text-gray-700">
					Email Address
				</label>
				<input id="email" type="email" name="email" value="{{ old('email', $email ?? '') }}" required autofocus
					placeholder="email@example.com" class="w-full px-4 py-2 border rounded-lg
                    focus:outline-none focus:ring-1
                    @error('email') border-red-500 focus:ring-red-500 @enderror">

				@error('email')
					<p class="text-sm text-red-600">{{ $message }}</p>
				@enderror
			</div>

			<!-- Password field -->
			<div class="space-y-1">
				<label for="password" class="text-sm font-medium text-gray-700">
					New Password
				</label>

				<div x-data="{ show: false }" class="relative">
					<input id="password" type="password" name="password" required placeholder="••••••••"
						:type="show ? 'text' : 'password'" class="w-full px-4 py-2 border rounded-lg pr-10
                        focus:outline-none focus:ring-1
                        @error('password') border-red-500 focus:ring-red-500 @enderror">

					<button type="button" @click="show = !show"
						class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600"
						aria-label="Toggle password visibility">
						<x-heroicon-o-eye class="w-5 h-5" x-show="!show" />
						<x-heroicon-o-eye-slash class="w-5 h-5" x-show="show" />
					</button>
				</div>

				@error('password')
					<p class="text-sm text-red-600">{{ $message }}</p>
				@enderror
			</div>

			<!-- Confirm Password -->
			<div class="space-y-1">
				<label for="password_confirmation" class="text-sm font-medium text-gray-700">
					Confirm Password
				</label>
				<input id="password_confirmation" type="password" name="password_confirmation" required
					placeholder="••••••••" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-1">
			</div>

			<button type="submit" :disabled="loading"
				class="w-full bg-sky-600 text-white py-2 rounded-lg hover:bg-sky-700 transition font-semibold disabled:opacity-60 disabled:cursor-not-allowed">
				<span x-show="!loading">Reset Password</span>
				<span x-show="loading">Resetting…</span>
			</button>

			<div class="text-sm text-center">
				<a href="{{ route('login') }}" class="text-sky-600 hover:underline">
					Back to Login
				</a>
			</div>
		</form>
	</div>
</x-layout.auth>