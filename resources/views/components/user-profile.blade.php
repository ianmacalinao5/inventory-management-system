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
		<button x-show="sidebarOpen"
			class="rounded-lg p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-600 transition-all duration-300">
			<svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
					d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
			</svg>
		</button>
	</div>
</div>