@props([
    'subHeading' => false,
])
<div class="px-4 sm:px-0">
    <h2 class="text-base font-semibold leading-7 text-gray-900">{{ $heading }}</h2>
    @if($subHeading)
        <p class="mt-1 text-sm leading-6 text-gray-600">{{ $subHeading }}</p>
    @endif
</div>
