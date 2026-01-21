@props(['title', 'type' => 'button'])

<button type="{{ $type }}" {{ $attributes->merge(['class' => 'px-6 py-2.5 text-sm font-medium text-white bg-sky-600 rounded-lg hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2 transition-colors']) }}>
	{{ $title }}
</button>