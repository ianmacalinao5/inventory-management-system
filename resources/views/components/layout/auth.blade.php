<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', 'Inventory Management System') - Inventory Management System</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>

<body>
	<main class="min-h-dvh grid grid-cols-1 md:grid-cols-2">

		<section class="hidden md:flex flex-col items-center justify-center bg-blue-600 text-white px-8">
			<div class="text-center space-y-4">
				<x-heroicon-o-archive-box class="w-16 h-16 mx-auto" />
				<h1 class="text-3xl font-bold tracking-wide">
					Inventory Management System
				</h1>
				<p class="text-blue-100 text-sm max-w-sm mx-auto">
					Manage stocks, track inventory, and monitor transactions efficiently.
				</p>
			</div>
		</section>

		<section class="flex items-center justify-center md:px-6">
			<div class="w-full max-w-md">
				{{ $slot }}
			</div>
		</section>

	</main>

</body>

</html>