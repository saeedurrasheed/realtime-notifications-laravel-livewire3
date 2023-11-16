@props([
    'colSpan' => 1,
])
<div class="col-span-1 sm:col-span-{{ $colSpan }}">
    <dt class="text-sm font-medium text-gray-500">{{ $label }}</dt>
    <dd class="mt-1 text-sm text-gray-900">{{ $value }}</dd>
</div>
