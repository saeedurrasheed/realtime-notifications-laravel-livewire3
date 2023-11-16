@props([
    'submit',
])
<form
    wire:submit="{{ $submit }}"
    {{ $attributes->merge(['class' => 'bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2']) }}
>
    {{ $slot }}
</form>
