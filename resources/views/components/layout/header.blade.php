<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{ $title ?? 'Inventory Management System' }}</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-full bg-gray-100 text-gray-900 antialiased">
	<!-- Top Header Bar -->
	<header class="sticky top-0 z-50 border-b border-gray-200 bg-white shadow-sm">
		<div class="mx-auto max-w-7xl">
			<!-- Top bar with logo and user actions -->
			<div class="flex h-16 items-center justify-between px-6">
				<!-- Logo and Brand -->
				<div class="flex items-center gap-3">
					<x-logo class="h-10 w-10 rounded-lg" />
				</div>

				<!-- Search Bar -->
				<div class="hidden md:flex flex-1 max-w-md mx-8">
					<div class="relative w-full">
						<input type="search" placeholder="Search products, SKU, categories..."
							class="w-full rounded-lg border border-gray-300 bg-gray-50 py-2 pl-10 pr-4 text-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20" />
						<x-heroicon-o-magnifying-glass class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" />
					</div>
				</div>

				<!-- Right Actions -->
				<div class="flex items-center gap-4">
					<!-- Notifications -->
					<button class="relative rounded-lg p-2 text-gray-600 hover:bg-gray-100 hover:text-gray-900">
						<x-heroicon-o-bell class="h-6 w-6" />
						<span
							class="absolute right-1.5 top-1.5 h-2 w-2 rounded-full bg-red-500 ring-2 ring-white"></span>
					</button>

					<!-- User Menu -->
					<div class="flex items-center gap-3 border-l pl-4">
						<div class="hidden text-right sm:block">
							<p class="text-sm font-medium text-gray-900">Admin User</p>
							<p class="text-xs text-gray-500">admin@company.com</p>
						</div>
						<x-heroicon-o-user-circle initials="A" class="h-10 w-10" />
					</div>
				</div>
			</div>

			<!-- Navigation Menu -->
			<nav class="border-t border-gray-200 bg-white px-6">
				<div class="flex gap-1">
					<x-nav-link route="dashboard" href="{{ route('dashboard') }}">
						<x-heroicon-o-home class="w-5 h-5" />
						Dashboard
					</x-nav-link>

					<x-nav-link route="products" href="{{ route('products.index') }}">
						<x-heroicon-o-cube class="w-5 h-5" />
						Products
					</x-nav-link>

					<x-nav-link route="inventory" href="{{ route('inventory') }}">
						<x-heroicon-o-archive-box class="w-5 h-5" />
						Inventory
					</x-nav-link>

					<x-nav-link route="orders" href="{{ route('orders') }}">
						<x-heroicon-o-shopping-cart class="w-5 h-5" />
						Orders
					</x-nav-link>

					<x-nav-link route="suppliers" href="{{ route('suppliers') }}">
						<x-heroicon-o-users class="w-5 h-5" />
						Suppliers
					</x-nav-link>

					<x-nav-link route="reports" href="{{ route('reports') }}">
						<x-heroicon-o-chart-bar class="w-5 h-5" />
						Reports
					</x-nav-link>

					<x-nav-link route="settings" href="{{ route('settings') }}">
						<x-heroicon-o-cog-6-tooth class="w-5 h-5" />
						Settings
					</x-nav-link>
				</div>
			</nav>
		</div>
	</header>

	<!-- Main Content -->
	<main class="mx-auto max-w-7xl px-6 py-6">
		{{ $slot }}
	</main>

	<!-- Footer -->
	<x-footer />
</body>

</html>