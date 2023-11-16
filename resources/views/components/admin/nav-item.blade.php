@props([
    'title',
    'href',
    'icon' => null,
])
<li>
    <a href="{{ $href }}"
       {{ $attributes->merge([
            'class' => 'mb-3 text-gray-700 hover:text-indigo-600 hover:bg-gray-50 group flex gap-x-3 rounded-md p-2 text-sm leading-6 font-semibold'
       ])}}
        wire:navigate
    >
        {{ $icon }}
        {{ $title }}
    </a>
</li>
