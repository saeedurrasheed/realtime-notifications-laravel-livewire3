@props([
    'href' => '#',
    'textColor' => 'text-indigo-600',
])
<a
    wire:navigate
    href="{{ $href }}"
    {{ $attributes->merge(['class' => 'font-semibold hover:text-indigo-500 ' . $textColor]) }}
>
    {{ $slot }}
</a>
