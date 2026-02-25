@props(['name', 'title'])

<x-modals.base :name="$name" :title="$title">

	<form {{ $attributes->merge(['class' => 'space-y-4']) }}>

		{{ $slot }}

		<div class="flex justify-end gap-2 pt-3">
			<button type="button" class="px-4 py-2 bg-gray-300 rounded" @click="$dispatch('close-modal')">
				Cancel
			</button>

			<button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">
				Submit
			</button>
		</div>

	</form>

</x-modals.base>