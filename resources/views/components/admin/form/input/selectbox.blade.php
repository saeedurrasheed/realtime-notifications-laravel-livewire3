@props([
    'label' => null,
    'id',
    'model' => '',
    'live' => false,
    'name',
])
<select
    id="{{ $id }}"
    {{ $attributes->merge(['class' => 'border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ']) }}
>
    {{ $slot }}
</select>

<div class="mt-2 text-red-500 text-sm">
    @error($name) <span>{{ $message }}</span> @enderror
</div>
