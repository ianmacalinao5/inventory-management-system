@props(['route'])

<a {{ $attributes->merge([
	'class' => request()->routeIs($route . '*')
		? 'flex items-center gap-3 rounded-lg bg-blue-50 px-3 py-2.5 text-sm font-medium text-sky-700 transition'
		: 'flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-100 hover:text-gray-900 transition'
]) }}>
	{{ $slot }}
</a>