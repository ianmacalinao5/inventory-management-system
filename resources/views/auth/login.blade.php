@section('title', 'Login')

<x-layout.auth>
	<div class="w-full max-w-md bg-white p-8 rounded-xl">

		{{-- Mobile Branding --}}
		<div class="md:hidden text-center mb-6">
			<x-heroicon-o-archive-box class="w-10 h-10 mx-auto text-blue-600" />
			<h1 class="text-xl font-semibold mt-2">
				Inventory Management System
			</h1>
		</div>

		<form method="POST" action="{{ route('login') }}" class="space-y-6">
			@csrf

			<h2 class="text-2xl font-bold text-gray-800 text-center">
				Login
			</h2>

			{{-- Email --}}
			<div class="space-y-1">
				<label for="email" class="text-sm font-medium text-gray-700">
					Email
				</label>
				<input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
					placeholder="email@example.com" class="w-full px-4 py-2 border rounded-lg
                           focus:outline-none focus:ring-2 focus:ring-blue-500
                           @error('email') border-red-500 @enderror">
				@error('email')
					<p class="text-sm text-red-600">{{ $message }}</p>
				@enderror
			</div>

			{{-- Password --}}
			<div class="space-y-1">
				<label for="password" class="text-sm font-medium text-gray-700">
					Password
				</label>
				<div class="relative">
					<input id="password" type="password" name="password" required placeholder="••••••••" class="w-full px-4 py-2 border rounded-lg pr-10
                               focus:outline-none focus:ring-2 focus:ring-blue-500
                               @error('password') border-red-500 @enderror">
					<x-heroicon-o-eye
						class="w-5 h-5 text-gray-400 absolute right-3 top-1/2 -translate-y-1/2 cursor-pointer" />
				</div>
				@error('password')
					<p class="text-sm text-red-600">{{ $message }}</p>
				@enderror
			</div>

			{{-- Remember Me --}}
			<div class="flex items-center justify-between text-sm">
				<label class="flex items-center gap-2">
					<input type="checkbox" name="remember"
						class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
					Remember me
				</label>

				<a href="{{ route('password.request') }}" class="text-blue-600 hover:underline">
					Forgot password?
				</a>
			</div>

			{{-- Submit --}}
			<button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg
                       hover:bg-blue-700 transition font-semibold">
				Sign in
			</button>

		</form>
	</div>
</x-layout.auth>