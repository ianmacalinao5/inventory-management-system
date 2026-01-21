@props([
	'type' => 'text',
	'name' => '',
	'value' => '',
])

<input 
	type="{{ $type }}" 
	id="{{ $name }}" 
	name="{{ $name }}" 
	value="{{ old($name, $value) }}"
	{{ $attributes->merge([
        'class' => 'w-full px-4 py-2.5 border border-gray-300 rounded-lg outline-none focus:ring-1 focus:ring-sky-600'
    ]) }}
>