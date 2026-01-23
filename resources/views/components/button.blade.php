@props(['title', 'loadingTitle' => '', 'type' => 'button'])

<button type="{{ $type }}" x-bind:disabled="loading" {{ $attributes->merge([
	'class' => 'px-6 py-2.5 text-sm font-medium text-white bg-sky-600 rounded-lg
                hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-sky-500
                transition-colors disabled:opacity-70 cursor-pointer',
]) }}>
	<span x-show="!loading">
		{{ $title }}
	</span>

	<span x-show="loading">
		{{ $loadingTitle }}
	</span>
</button>