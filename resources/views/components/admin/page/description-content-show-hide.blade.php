@props([
    'content',
])

<div x-data="{ open: false }"
	{{ $attributes->merge([
		'class' => ''
	]) }}
>
	<button 
		x-on:click="open = ! open"
		x-text="open ? '{{ __('Hide content') }}' : '{{ __('Show content') }}'"
		class="inline-flex justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
	>
	</button>
	<span 
		x-show="open" x-transition>
		{!! $content !!}
	</span>
</div>
