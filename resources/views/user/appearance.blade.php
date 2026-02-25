@section('title', 'System Appearance')

<x-layout.sidebar>
	<div class="max-w-2xl">
		<div class="mb-5">
			<h2 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Profile Settings</h2>
			<p class="mt-2 text-sm text-gray-600 dark:text-gray-200">Manage your account information and preferences.
			</p>
		</div>

		<x-profile.navbar-profile class="mb-3" />

		@if(auth()->check())

			<div class="bg-white dark:bg-gray-900
												rounded-lg border border-gray-200 dark:border-gray-700
												shadow-sm">

				<form x-data="{ loading: false, selectedTheme: '{{ auth()->user()->theme_mode }}' }"
					@submit="loading = true" method="POST" action="{{ route('profile.appearance.update') }}"
					class="space-y-6 p-6">
					@csrf
					@method('PUT')

					<x-theme-radio id="theme-light" value="light" label="Light"
						:checked="auth()->user()->theme_mode === 'light'">
						<x-slot:icon>
							<x-heroicon-o-sun class="w-5 h-5" />
						</x-slot:icon>
					</x-theme-radio>

					<x-theme-radio id="theme-dark" value="dark" label="Dark" :checked="auth()->user()->theme_mode === 'dark'">
						<x-slot:icon>
							<x-heroicon-o-moon class="w-5 h-5" />
						</x-slot:icon>
					</x-theme-radio>

					<x-theme-radio id="theme-system" value="system" label="System"
						:checked="auth()->user()->theme_mode === 'system'">
						<x-slot:icon>
							<x-heroicon-o-computer-desktop class="w-5 h-5" />
						</x-slot:icon>
					</x-theme-radio>

					<x-button type="submit" title="Save Theme" loadingTitle="Saving Theme" />
				</form>
			</div>
		@endif
	</div>
</x-layout.sidebar>