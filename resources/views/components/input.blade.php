@props([
    'type' => 'text',
    'name' => '',
    'value' => '',
])

@php
    $hasError = $errors->has($name);
@endphp

<input
    type="{{ $type }}"
    id="{{ $name }}"
    name="{{ $name }}"
    value="{{ old($name, $value) }}"
    {{ $attributes->merge([
        'class' => '
            w-full px-4 py-2.5 rounded-lg outline-none border focus:ring-1 transition 
            ' . ($hasError
                ? 'border-red-500 focus:ring-red-500'
                : 'border-gray-300 focus:ring-sky-600'
            )
    ]) }}
/>
