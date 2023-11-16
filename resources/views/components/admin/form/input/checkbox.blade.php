@props([
    'id',
    'label',
    'description' => null,
    'checkmark',
])
<div class="relative flex items-start">
    <div class="flex h-6 items-center">
        <input
            id="{{ $id }}"
            type="checkbox"
            @if(isset($checkmark)) checked @endif
            {{ $attributes->merge(['class' => 'h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600']) }}
        />
    </div>
    <div class="ml-3 text-sm leading-6">
        <label for="{{ $id }}" class="font-medium text-gray-900">{{ $label }}</label>
        @if($description)
            <p class="text-gray-500">{{ $description }}</p>
        @endif
    </div>
</div>
