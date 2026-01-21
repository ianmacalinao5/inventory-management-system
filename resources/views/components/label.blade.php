@props(['title', 'for'])

<label for="{{ $for }}" {{ $attributes->merge(['class' => 'block text-sm font-medium text-gray-700']) }}>
	{{ $title }}
</label>