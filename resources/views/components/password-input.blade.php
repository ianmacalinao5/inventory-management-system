@props([
    'name' => '',
    'value' => '',
])

@php
    $hasError = $errors->has($name);
@endphp

<div x-data="{ show: false }" class="relative">
    <input
        :type="show ? 'text' : 'password'"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        autocomplete="current-password"
        {{ $attributes->merge([
            'class' => '
                w-full px-4 py-2.5 rounded-lg outline-none border focus:ring-1 transition pr-10 dark:border-gray-700 dark:bg-gray-800
                ' . ($hasError
                    ? 'border-red-500 focus:ring-red-500 dark:border-red-300 dark:focus:ring-red-300'
                    : 'border-gray-300 focus:ring-sky-600'
                )
        ]) }}
    />

    <button
        type="button"
        @click="show = !show"
        class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 cursor-pointer"
        aria-label="Toggle password visibility"
    >
        <x-heroicon-o-eye class="w-5 h-5" x-show="!show" />
        <x-heroicon-o-eye-slash class="w-5 h-5" x-show="show" />
    </button>
</div>
