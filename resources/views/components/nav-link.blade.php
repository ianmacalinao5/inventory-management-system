@props(['route'])

<a {{ $attributes->merge([
	'class' => request()->routeIs($route . '*')
		? 'flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition
               bg-blue-50 text-sky-700
               dark:bg-sky-500/10 dark:text-sky-400'
		: 'flex items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition
               text-gray-700 hover:bg-gray-100 hover:text-gray-900
               dark:text-gray-400 dark:hover:bg-sky-500/10 dark:hover:text-gray-100'
]) }}>
	{{ $slot }}
</a>