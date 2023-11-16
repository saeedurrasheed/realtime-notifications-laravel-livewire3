@props([
    'label' => null,
    'name',
    'id',
])
<div>
    @if($label)
        <label for="{{ $name }}" class="block text-sm font-medium leading-6 text-gray-900">{{ $label }}</label>
    @endif
    <select
        id="{{ $id }}"
        name="{{ $name }}"
        {{ $attributes->merge(['class' => 'mt-2 block rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6']) }}
    >
        {{ $slot }}
    </select>
</div>
