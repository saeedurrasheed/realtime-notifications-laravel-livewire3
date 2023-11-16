@props([
    'type' => 'text',
    'id',
    'value' => '',
    'name',
])
<input
    id="{{ $id }}"
    type="{{ $type }}"
    value="{{ $value }}"
    {{ $attributes->merge([
        'class' => 'border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2'
    ]) }}
/>
<div class="mt-2 text-red-500 text-sm">
    @error($name) <span class="error">{{ $message }}</span> @enderror
</div>
