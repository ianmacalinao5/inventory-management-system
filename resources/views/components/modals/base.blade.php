@props(['name', 'title' => null, 'maxWidth' => 'md'])

<div x-data="{ open:false }" x-on:open-modal.window="if($event.detail=='{{ $name }}') open=true"
	x-on:close-modal.window="open=false">

	<div x-show="open" x-transition class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
		<div class="bg-white dark:bg-gray-800 rounded-xl shadow-lg w-full max-w-{{ $maxWidth }} p-6">

			@if($title)
				<div class="flex justify-between mb-4">
					<h2 class="text-lg font-semibold text-gray-800 dark:text-white">
						{{ $title }}
					</h2>

					<button @click="$dispatch('close-modal')">✕</button>
				</div>
			@endif

			{{ $slot }}

		</div>
	</div>

</div>