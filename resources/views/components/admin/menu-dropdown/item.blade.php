@props([
    'href' => '#',
])
<a
    href="{{ $href }}"
    role="menuitem"
    tabindex="-1"
    {{ $attributes->merge(['class' => 'text-gray-700 block px-4 py-2 text-sm hover:bg-gray-50 text-gray-900']) }}
>{{ $slot }}</a>
