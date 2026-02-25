@section('title', 'Products')

<x-layout.sidebar>

	<div class="flex justify-between items-center">
		<div>
			<h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">Products</h1>
			<p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
				Manage your products and stocks
			</p>
		</div>

		<x-button-default title="Add Product" x-data @click="$dispatch('open-modal','add-product')" />
	</div>


	<x-modals.form name="add-product" title="Add Product" class="max-w-2xl">
		<input placeholder="Product Name" class="w-full border rounded px-3 py-2">
		<input type="number" placeholder="Price" class="w-full border rounded px-3 py-2">
	</x-modals.form>

</x-layout.sidebar>