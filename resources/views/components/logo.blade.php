<div class="flex h-16 items-center gap-3 border-b border-gray-200 px-6"
	:class="sidebarOpen ? 'justify-start' : 'justify-center'">
	<div class="flex h-10 w-10 items-center justify-center rounded-lg bg-sky-600 shrink-0">
		<x-heroicon-o-archive-box class="h-6 w-6 text-white" />
	</div>
	<div x-show="sidebarOpen" class="transition-all duration-300">
		<h1 class="text-lg font-bold text-gray-900">Inventory</h1>
		<p class="text-xs text-gray-500">Management System</p>
	</div>
</div>