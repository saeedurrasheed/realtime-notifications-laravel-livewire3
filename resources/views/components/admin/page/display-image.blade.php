@props([
    'name',
    'show_img'=> false,
    'show_image_name' => false,
    'img_alt' => null,
    'show_img_link' => false,    
])

@if($show_img)
<img alt="{{ $img_alt ?: '-' }}" src="{{ load_product_image($name) }}" width="150" />
@endif

@if($show_image_name)
	<span>{{ $name }}</span>
@endif

@if($show_img_link)
	<a class="block" href="{{ load_product_image($name) }}" target="_blank" title="click to download" download>
	<x-heroicon-o-arrow-down class="inline shrink-0 text-gray-500 hover:text-silver-600 w-6 h-6"/>
	Download
	</a> 
@endif