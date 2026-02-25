@props(['name', 'title', 'confirmText' => 'Confirm'])

<x-modals.base :name="$name" :title="$title">

	<div class="space-y-4">

		<div>
			{{ $slot }}
		</div>

		<div class="flex justify-end gap-2">
			<button @click="$dispatch('close-modal')" class="px-3 py-1 bg-gray-300 rounded">
				Cancel
			</button>

			<button {{ $attributes }} class="px-3 py-1 bg-red-600 text-white rounded">
				{{ $confirmText }}
			</button>
		</div>

	</div>

</x-modals.base>