@props([
    'id',
    'value' => '',
    'model',
])
<input
	id="{{ $id }}"
	value="{!! $value !!}"
	type="hidden"
	{{ $attributes->merge([
        'class' => 'mt-2 block w-full rounded-md border-0 py-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 disabled:bg-gray-50 disabled:cursor-not-allowed'
    ]) }}
/>
<trix-editor wire:ignore input="{{ $id }}" ></trix-editor>

<script>
    addEventListener("trix-blur", function(event) {
        @this.set("{{ $model }}", document.getElementById("{{ $id }}").getAttribute('value'))
    });
</script>
