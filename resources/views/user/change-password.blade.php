@section('title', 'Change Password')

<x-layout.sidebar>
	<div class="max-w-2xl">
		<div class="mb-5">
			<h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Profile Settings</h2>
			<p class="mt-2 text-sm text-gray-600 dark:text-gray-200">Manage your account information and preferences.
			</p>
		</div>
		<x-profile.navbar-profile class="mb-3" />

		@if(auth()->check())

			<div class="bg-white rounded-lg border border-gray-200 shadow-sm dark:border-gray-700 dark:bg-gray-900">
				<form x-data="{ loading: false }" @submit="loading = true" action="/profile/change-password"
					class="p-6 space-y-6" method="POST">
					@method('PUT')
					@csrf

					<div class="relative space-y-2" x-data="{ show: false }">
						<x-label for="current_password" title="Current Password" />

						<x-password-input id="current_password" name="current_password" placeholder="••••••••"
							:error="$errors->has('current_password')" />

						@error('current_password')
							<p class="text-sm text-red-600 dark:text-red-300">{{ $message }}</p>
						@enderror
					</div>

					<div class="space-y-2">
						<x-label for="new_password" title="New Password" />
						<x-password-input id="new_password" name="new_password" placeholder="••••••••"
							:error="$errors->has('new_password')" autocomplete="off" />
						@error('new_password')
							<p class=" text-sm text-red-600 dark:text-red-300">{{ $message }}</p>
						@enderror
					</div>

					<div class="space-y-2">
						<x-label for="new_password_confirmation" title="Confirm New Password" />
						<x-input id="new_password_confirmation" name="new_password_confirmation" placeholder="••••••••"
							:error="$errors->has('new_password_confirmation')" autocomplete="off" />
						@error('new_password_confirmation')
							<p class=" text-sm text-red-600 dark:text-red-300">{{ $message }}</p>
						@enderror
					</div>

					<x-button type="submit" title="Update Password" loadingTitle="Updating Password" />
				</form>
			</div>

		@endif

	</div>
</x-layout.sidebar>