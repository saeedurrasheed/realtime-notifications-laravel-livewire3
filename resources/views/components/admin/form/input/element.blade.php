@props([
    'smColSpan' => 'sm:col-span-3'
])
<div {{ $attributes->merge(['class' => $smColSpan]) }}>
    {{ $slot }}
</div>
