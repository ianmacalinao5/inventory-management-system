@section('title', 'Profile')
@section('page-title', 'Profile')

<x-layout.sidebar>
	<div class="max-w-2xl">
		<div class="mb-5">
			<h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Profile Settings</h2>
			<p class="mt-2 text-sm text-gray-600 dark:text-gray-200">Manage your account information and preferences.
			</p>
		</div>

		<x-profile.navbar-profile class="mb-3" />

		@if(auth()->check())

			<div class="bg-white rounded-lg border border-gray-200 dark:border-gray-700 dark:bg-gray-900 shadow-sm">
				<form x-data="{ loading: false }" @submit="loading = true" action="/profile" class="p-6 space-y-6"
					method="POST">
					@method('PUT')
					@csrf

					<div class="space-y-2">
						<x-label for="email" title="Email" />
						<x-input type="email" id="email" name="email" :value="auth()->user()->email" readonly disabled
							class="text-gray-500 cursor-not-allowed" />
						<p class="text-xs text-gray-500">Your email address cannot be changed.</p>
					</div>

					<div class="space-y-2">
						<x-label for="name" title="Name" />
						<x-input type="text" id="name" name="name" :value="auth()->user()->name" required />
					</div>

					<x-button type="submit" title="Save Changes" loadingTitle="Saving Changes" />
				</form>
			</div>

		@endif
	</div>
</x-layout.sidebar>