<div class="border-t border-gray-200 p-4">
	<div class="flex items-center gap-3 justify-center">

		<a href="{{ route('user.profile') }}"
			class="flex items-center gap-3 rounded-lg p-2 hover:bg-gray-100 transition">

			<div
				class="h-10 w-10 rounded-full bg-linear-to-br bg-sky-600 flex items-center justify-center text-white font-semibold shrink-0">
				@if(auth()->check())
					{{ Str::substr(auth()->user()->name, 0, 1) }}
				@endif
			</div>

			<div x-show="sidebarOpen" x-transition class="min-w-0">
				@if(auth()->check())
					<p class="text-sm font-medium text-gray-900 truncate">
						{{ auth()->user()->name }}
					</p>
					<p class="text-xs text-gray-500 truncate">
						{{ auth()->user()->email }}
					</p>
				@endif
			</div>
		</a>

		<form method="POST" action="{{ route('logout') }}" class="shrink-0" x-show="sidebarOpen">
			@csrf
			<button type="submit"
				class="rounded-lg p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-600 transition cursor-pointer"
				title="Logout">
				<x-heroicon-o-arrow-right-on-rectangle class="w-5 h-5" />
			</button>
		</form>

	</div>
</div>