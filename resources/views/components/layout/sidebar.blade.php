<!DOCTYPE html>
<html lang="en" class="h-full scroll-smooth"
	x-data="{ theme: '{{ auth()->check() ? auth()->user()->theme_mode : 'system' }}' }" x-init="
        if (theme === 'system') {
          theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        }
        $watch('theme', value => {
          if (value === 'dark') {
            document.documentElement.classList.add('dark');
          } else {
            document.documentElement.classList.remove('dark');
          }
        });
        if (theme === 'dark') {
          document.documentElement.classList.add('dark');
        }
      " :class="theme === 'dark' ? 'dark' : ''">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', 'Inventory Management System') - Inventory Management System</title>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ sidebarOpen: JSON.parse(localStorage.getItem('sidebarOpen')) ?? true }"
	x-init="$watch('sidebarOpen', value => localStorage.setItem('sidebarOpen', JSON.stringify(value)))"
	class="h-full bg-gray-100 dark:bg-slate-900 text-gray-900 dark:text-gray-100 antialiased">

	<div class="flex h-full">
		<!-- Sidebar -->
		<aside x-cloak :class="sidebarOpen ? 'w-64' : 'w-20'" class="fixed inset-y-0 left-0 z-50
           flex flex-col
           border-r border-gray-200 dark:border-gray-700
           bg-white dark:bg-gray-900
           shadow-lg transition-all duration-300 sidebar-scroll">

			<!-- Logo Section -->
			<x-logo />

			@php
				$navClass = 'ml-3 transition-all duration-300';
				$navIconSize = 'w-5 h-5';
			@endphp

			<!-- Navigation Menu -->
			<nav class="flex-1 overflow-y-auto px-3 py-4">
				<div class="space-y-1" :class="sidebarOpen ? '' : 'flex flex-col justify-center items-center' ">
					<x-nav-link route="dashboard" href="{{ route('dashboard.index') }}" data-tippy-content="Dashboard">
						<x-heroicon-o-home class="{{ $navIconSize }}" />
						<span x-show="sidebarOpen" class="{{ $navClass }}">Dashboard</span>
					</x-nav-link>

					<x-nav-link route="products" href="{{ route('products.index') }}" data-tippy-content="Products">
						<x-heroicon-o-cube class="{{ $navIconSize }}" />
						<span x-show="sidebarOpen" class="{{ $navClass }}">Products</span>
						<span x-show="sidebarOpen" class="ml-auto rounded-full
							bg-blue-100 px-2 py-0.5 text-xs font-medium text-sky-700
							dark:bg-sky-500/10 dark:text-sky-400">
							248
						</span>

					</x-nav-link>

					<x-nav-link route="inventory" href="{{ route('inventory.index') }}" data-tippy-content="Inventory">
						<x-heroicon-o-archive-box class="{{ $navIconSize }}" />
						<span x-show="sidebarOpen" class="{{ $navClass }}">Inventory</span>
					</x-nav-link>

					<x-nav-link route="orders" href="{{ route('orders.index') }}" data-tippy-content="Orders">
						<x-heroicon-o-shopping-cart class="{{ $navIconSize }}" />
						<span x-show="sidebarOpen" class="{{ $navClass }}">Orders</span>
						<span x-show="sidebarOpen"
							class="ml-auto rounded-full bg-red-100 px-2 py-0.5 text-xs font-medium text-red-700 dark:bg-red-500/10 dark:text-red-400">12</span>
					</x-nav-link>

					<div :class="sidebarOpen
						? 'my-4 border-t border-gray-200 dark:border-gray-700'
						: 'my-4 w-12 border-t border-gray-200 dark:border-gray-700'">
					</div>

					<x-nav-link route="suppliers" href="{{ route('suppliers.index') }}" data-tippy-content="Suppliers">
						<x-heroicon-o-users class="{{ $navIconSize }}" />
						<span x-show="sidebarOpen" class="{{ $navClass }}">Suppliers</span>
					</x-nav-link>

					<x-nav-link route="categories" href="{{ route('categories.index') }}"
						data-tippy-content="Categories">
						<x-heroicon-o-tag class="{{ $navIconSize }}" />
						<span x-show="sidebarOpen" class="{{ $navClass }}">Categories</span>
					</x-nav-link>

					<x-nav-link route="reports" href="{{ route('reports.index') }}" data-tippy-content="Reports">
						<x-heroicon-o-chart-bar class="{{ $navIconSize }}" />
						<span x-show="sidebarOpen" class="{{ $navClass }}">Reports</span>
					</x-nav-link>

					<div :class="sidebarOpen
						? 'my-4 border-t border-gray-200 dark:border-gray-700'
						: 'my-4 w-12 border-t border-gray-200 dark:border-gray-700'">
					</div>

					<x-nav-link route="settings" href="{{ route('settings.index') }}" data-tippy-content="Settings">
						<x-heroicon-o-cog-6-tooth class="{{ $navIconSize }}" />
						<span x-show="sidebarOpen" class="{{ $navClass }}">Settings</span>
					</x-nav-link>
				</div>
			</nav>

			<x-user-profile />
		</aside>

		<!-- Main Content Area -->
		<div x-cloak :class="sidebarOpen ? 'pl-64' : 'pl-20'" class="flex flex-1 flex-col transition-all duration-300">
			<x-header />

			<main class="flex-1 overflow-y-auto p-8 sidebar-scroll">
				{{ $slot }}
			</main>

			<x-footer />
		</div>
	</div>

</body>

</html>