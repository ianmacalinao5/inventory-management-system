@props(['title', 'value'])
<div {{ $attributes->merge(['class' => 'bg-white dark:bg-gray-800 p-5 rounded-lg shadow']) }}>
	<p class="text-sm text-gray-500 dark:text-gray-400">
		{{ $title }}
	</p>
	<p class="mt-2 text-3xl font-semibold text-gray-800 dark:text-gray-100">
		{{ $value }}
	</p>
</div>