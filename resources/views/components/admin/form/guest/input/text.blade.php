@props([
    'type' => 'text',
    'id',
    'name',
    'value' => '',
    'model' => '',
    'live' => false,
    'placeholder' => null,
])
<input
    id="{{ $id }}"
    name="{{ $name }}"
    type="{{ $type }}"
    value="{{ $value }}"
    wire:model{{ $live ? '.live' : ''  }}="{{ $model  }}"
    required
    placeholder="{{ $placeholder }}"
    {{ $attributes->merge([
        'class' => 'block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6'
    ]) }}
/>
