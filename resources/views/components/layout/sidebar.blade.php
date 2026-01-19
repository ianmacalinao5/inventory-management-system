<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', 'Inventory Management System') - Inventory Management System</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body x-data="{
        sidebarOpen: JSON.parse(localStorage.getItem('sidebarOpen')) ?? true
    }" x-init="$watch('sidebarOpen', value => localStorage.setItem('sidebarOpen', JSON.stringify(value)))"
	class="h-full bg-gray-100 text-gray-900 antialiased">

	<div class="flex h-full">
		<!-- Sidebar -->
		<aside x-cloak :class="sidebarOpen ? 'w-64' : 'w-21'"
			class="fixed inset-y-0 left-0 z-50 flex flex-col border-r border-gray-200 bg-white shadow-lg transition-all duration-300">

			<!-- Logo Section -->
			<x-logo />

			<!-- Navigation Menu -->
			<nav class="flex-1 overflow-y-auto px-3 py-4">
				<div class="space-y-1">
					<x-nav-link route="dashboard" href="{{ route('dashboard') }}" data-tippy-content="Dashboard">
						<x-heroicon-o-home class="w-5 h-5" />
						<span x-show="sidebarOpen" class="ml-3 transition-all duration-300">Dashboard</span>
					</x-nav-link>

					<x-nav-link route="products" href="{{ route('products.index') }}" data-tippy-content="Products">
						<x-heroicon-o-cube class="w-5 h-5" />
						<span x-show="sidebarOpen" class="ml-3 transition-all duration-300">Products</span>
						<span x-show="sidebarOpen"
							class="ml-auto rounded-full bg-blue-100 px-2 py-0.5 text-xs font-medium text-sky-700">248</span>
					</x-nav-link>

					<x-nav-link route="inventory" href="{{ route('inventory') }}" data-tippy-content="Inventory">
						<x-heroicon-o-archive-box class="w-5 h-5" />
						<span x-show="sidebarOpen" class="ml-3 transition-all duration-300">Inventory</span>
					</x-nav-link>

					<x-nav-link route="orders" href="{{ route('orders') }}" data-tippy-content="Orders">
						<x-heroicon-o-shopping-cart class="w-5 h-5" />
						<span x-show="sidebarOpen" class="ml-3 transition-all duration-300">Orders</span>
						<span x-show="sidebarOpen"
							class="ml-auto rounded-full bg-red-100 px-2 py-0.5 text-xs font-medium text-red-700">12</span>
					</x-nav-link>

					<div class="my-4 border-t border-gray-200"></div>

					<x-nav-link route="suppliers" href="{{ route('suppliers') }}" data-tippy-content="Suppliers">
						<x-heroicon-o-users class="w-5 h-5" />
						<span x-show="sidebarOpen" class="ml-3 transition-all duration-300">Suppliers</span>
					</x-nav-link>

					<x-nav-link route="categories" href="{{ route('categories') }}" data-tippy-content="Categories">
						<x-heroicon-o-tag class="w-5 h-5" />
						<span x-show="sidebarOpen" class="ml-3 transition-all duration-300">Categories</span>
					</x-nav-link>

					<x-nav-link route="reports" href="{{ route('reports') }}" data-tippy-content="Reports">
						<x-heroicon-o-chart-bar class="w-5 h-5" />
						<span x-show="sidebarOpen" class="ml-3 transition-all duration-300">Reports</span>
					</x-nav-link>

					<div class="my-4 border-t border-gray-200"></div>

					<x-nav-link route="settings" href="{{ route('settings') }}" data-tippy-content="Settings">
						<x-heroicon-o-cog-6-tooth class="w-5 h-5" />
						<span x-show="sidebarOpen" class="ml-3 transition-all duration-300">Settings</span>
					</x-nav-link>
				</div>
			</nav>

			<x-user-profile />
		</aside>

		<!-- Main Content Area -->
		<div x-cloak :class="sidebarOpen ? 'pl-64' : 'pl-20'" class="flex flex-1 flex-col transition-all duration-300">
			<x-header />

			<main class="flex-1 overflow-y-auto p-6">
				{{ $slot }}
			</main>

			<x-footer />
		</div>
	</div>
</body>

</html>