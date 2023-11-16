@props([
    'colspan' => null,
])
<td
    {{ $colspan ? "colspan = $colspan" : ''}}
    {{ $attributes->merge([
    'class' => 'px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white'
]) }}
>
    {{ $slot }}
</td>
