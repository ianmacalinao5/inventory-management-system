@props(['title', 'for'])

<label for="{{ $for }}" {{ $attributes->merge(['class' => 'block text-sm font-medium text-gray-700 dark:text-gray-100']) }}>
	{{ $title }}
</label>