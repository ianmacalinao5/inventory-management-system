@props([
    'id',
    'value',
    'label',
    'checked' => false,
])

<label
    for="{{ $id }}"
    class="flex items-center gap-4 p-3 border rounded-lg cursor-pointer
           transition
           hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:border-gray-700"
    :class="selectedTheme === '{{ $value }}' ? 'border-sky-600 ring-1 ring-sky-600' : 'border-gray-200'"
>
    <input
        id="{{ $id }}"
        type="radio"
        name="theme_mode"
        value="{{ $value }}"
        class="sr-only"
        @checked($checked)
		:class="{
		'ring-1 ring-sky-500 border-sky-500 dark:ring-sky-400 dark:border-sky-400': {{ $checked ? 'true' : 'false' }}
		}"
        x-model="selectedTheme"
    />

    <div class="flex items-center gap-3 dark:text-gray-100">
        {{ $icon }}
        <span class="text-sm font-medium text-gray-900 dark:text-gray-100">
            {{ $label }}
        </span>
    </div>
</label>