@section('title', 'Profile')

<x-layout.sidebar>
	<div class="max-w-2xl">
		<div class="mb-8">
			<h2 class="text-2xl font-semibold text-gray-900">Profile Settings</h2>
			<p class="mt-2 text-sm text-gray-600">Manage your account information and preferences.</p>
		</div>


		@if (session('success'))
			<p class="text-sm text-green-600 text-center p-3 bg-green-100 rounded">
				{{ session('success') }}
			</p>
		@endif

		@if(auth()->check())

			<div class="bg-white rounded-lg border border-gray-200 shadow-sm">
				<form action="/profile" class="p-6 space-y-6" method="POST">
					@method('PUT')
					@csrf

					<div class="space-y-2">
						<label for="email" class="block text-sm font-medium text-gray-700">
							Email Address
						</label>
						<input type="email" id="email" name="email" value="{{ auth()->user()->email }}"
							class="w-full px-4 py-2.5 bg-gray-50 border border-gray-300 rounded-lg text-gray-500 cursor-not-allowed focus:outline-none"
							readonly disabled>
						<p class="text-xs text-gray-500">Your email address cannot be changed.</p>
					</div>

					<div class="space-y-2">
						<label for="name" class="block text-sm font-medium text-gray-700">
							Full Name
						</label>
						<input type="text" id="name" name="name" value="{{ auth()->user()->name }}"
							class="w-full px-4 py-2.5 border border-gray-300 rounded-lg outline-none focus:ring-1 focus:ring-sky-600"
							required>
					</div>

					<button type="submit"
						class="px-6 py-2.5 text-sm font-medium text-white bg-sky-600 rounded-lg hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 transition-colors">
						Save Changes
					</button>
				</form>
			</div>

		@endif
	</div>
</x-layout.sidebar>