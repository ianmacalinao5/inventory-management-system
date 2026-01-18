<div class="border-t border-gray-200 p-4">
	<div class="flex items-center gap-3 justify-center">
		<div
			class="h-10 w-10 rounded-full bg-linear-to-br from-blue-500 to-blue-700 flex items-center justify-center text-white font-semibold shrink-0">
			A
		</div>
		<div x-show="sidebarOpen" class="flex-1 min-w-0 transition-all duration-300">
			<p class="text-sm font-medium text-gray-900 truncate">Admin User</p>
			<p class="text-xs text-gray-500 truncate">admin@company.com</p>
		</div>
		<button x-show="sidebarOpen" class="">
			<form method="POST" action="{{ route('logout') }}">
				@csrf

				<button type="submit"
					class="flex items-center gap-2 rounded-lg p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-600 transition-all duration-300">
					<x-heroicon-o-arrow-right-on-rectangle class="w-5 h-5" />
				</button>
			</form>

		</button>
	</div>
</div>