@section('title', 'Dashboard')

@php
	$totalProducts = 10;
	$totalCategories = 4;
	$totalSuppliers = 5;
	$totalOrders = 50;

	$lowStockItems = [
		['name' => 'Laptop', 'stock' => 2, 'reorder_level' => 5],
		['name' => 'Mouse', 'stock' => 0, 'reorder_level' => 10],
		['name' => 'Keyboard', 'stock' => 3, 'reorder_level' => 5],
	];

	$recentActivities = [
		'Order #1024 was completed',
		'Stock added to Laptop (+10)',
		'New product added: Monitor',
		'Supplier ABC updated',
	];
@endphp

<x-layout.sidebar>
	<div class="space-y-6">

		<!-- Page Header -->
		<div>
			<h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Dashboard</h1>
			<p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Overview of your inventory and operations</p>
		</div>

		<!-- Stats Cards -->
		<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
			<x-dashboard.card title="Total Products" value="{{ $totalProducts }}" />
			<x-dashboard.card title="Categories" value="{{ $totalCategories }}" />
			<x-dashboard.card title="Suppliers" value="{{ $totalSuppliers }}" />
			<x-dashboard.card title="Total Orders" value="{{ $totalOrders }}" />
		</div>

		<!-- Charts Row -->
		<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
			<!-- Orders Chart -->
			<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
				<h2 class="text-lg font-medium text-gray-800 dark:text-gray-100 mb-4">Orders (Last 7 Days)</h2>
				<x-chartjs-component :chart="$ordersChart" />
			</div>

			<!-- Stock Chart -->
			<div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
				<h2 class="text-lg font-medium text-gray-800 dark:text-gray-100 mb-4">Stock Distribution</h2>
				<x-chartjs-component :chart="$stockChart" />
			</div>
		</div>

		<!-- Content Row -->
		<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

			<!-- Low Stock Alerts (Takes 2 columns) -->
			<div class="lg:col-span-2 bg-white dark:bg-gray-800 rounded-lg shadow">
				<div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
					<h2 class="text-lg font-medium text-gray-800 dark:text-gray-100">Low Stock Alerts</h2>
				</div>

				<div class="overflow-x-auto">
					<table class="w-full text-sm">
						<thead class="bg-gray-50 dark:bg-gray-700">
							<tr>
								<th
									class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
									Product</th>
								<th
									class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
									Stock</th>
								<th
									class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
									Reorder Level</th>
								<th
									class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
									Status</th>
							</tr>
						</thead>
						<tbody class="divide-y divide-gray-200 dark:divide-gray-700">
							@forelse ($lowStockItems as $item)
								<tr class="hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
									<td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-100">
										{{ $item['name'] }}
									</td>
									<td class="px-6 py-4 whitespace-nowrap text-gray-700 dark:text-gray-300">
										{{ $item['stock'] }}
									</td>
									<td class="px-6 py-4 whitespace-nowrap text-gray-700 dark:text-gray-300">
										{{ $item['reorder_level'] }}
									</td>
									<td class="px-6 py-4 whitespace-nowrap">
										@if ($item['stock'] === 0)
											<span
												class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200">
												Critical
											</span>
										@else
											<span
												class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-200">
												Low
											</span>
										@endif
									</td>
								</tr>
							@empty
								<tr>
									<td colspan="4" class="px-6 py-8 text-center text-gray-500 dark:text-gray-400">
										All stocks are healthy 🎉
									</td>
								</tr>
							@endforelse
						</tbody>
					</table>
				</div>
			</div>

			<!-- Recent Activity (Takes 1 column) -->
			<div class="bg-white dark:bg-gray-800 rounded-lg shadow">
				<div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
					<h2 class="text-lg font-medium text-gray-800 dark:text-gray-100">Recent Activity</h2>
				</div>

				<ul class="divide-y divide-gray-200 dark:divide-gray-700">
					@foreach ($recentActivities as $activity)
						<li
							class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">
							<span class="flex items-start">
								<span class="shrink-0 w-2 h-2 mt-1.5 mr-3 bg-blue-500 rounded-full"></span>
								<span>{{ $activity }}</span>
							</span>
						</li>
					@endforeach
				</ul>
			</div>

		</div>

	</div>
</x-layout.sidebar>