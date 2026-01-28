@props(['route'])

<a {{ $attributes->merge([
	'class' => 'flex items-center justify-start pr-5 py-2.5 text-sm font-medium
                border-b-2 transition-all duration-300 ease-in-out ' .
		(request()->routeIs($route)
			? 'border-sky-600 text-sky-700 dark:text-sky-400 dark:border-sky-400'
			: 'border-transparent text-gray-700 dark:text-gray-300
               hover:text-gray-900 dark:hover:text-gray-100 hover:border-gray-300')
]) }}>
	{{ $slot }}
</a>