<header class="sticky top-0 z-40 border-b border-gray-200 bg-white shadow-sm">
	<div class="flex h-16 items-center justify-between px-6">
		<div class="flex items-center gap-5">
			<!-- Sidebar Toggle Button -->
			<button @click="sidebarOpen = !sidebarOpen" class="p-2 rounded-md hover:bg-gray-200">
				<x-heroicon-o-x-mark class="h-6 w-6" x-show="!sidebarOpen" />
				<x-heroicon-o-bars-3 class="h-6 w-6" x-show="sidebarOpen" />
			</button>

			<!-- Page Title / Breadcrumbs -->
			<div>
				<h2 class="text-xl font-semibold text-gray-900"> @yield('page-title', 'Dashboard')</h2>
			</div>

		</div>

		<!-- Header Actions -->
		<div class="flex items-center gap-4">
			<!-- Search -->
			<div class="relative hidden md:block">
				<input type="text" placeholder="Search..."
					class="w-64 rounded-lg border border-gray-300 bg-gray-50 py-2 pl-10 pr-4 text-sm outline-none focus:ring-1 focus:ring-sky-600" />
				<x-heroicon-o-magnifying-glass class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" />
			</div>

			<!-- Notifications -->
			<button class="relative rounded-lg p-2 text-gray-600 hover:bg-gray-100 hover:text-gray-900">
				<x-heroicon-o-bell class="h-6 w-6" />
				<span class="absolute right-1.5 top-1.5 h-2 w-2 rounded-full bg-red-500 ring-2 ring-white"></span>
			</button>

		</div>
	</div>
</header>