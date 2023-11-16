@props([
    'header',
])
<div class="overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>{{ $header }}</tr>
        </thead>
        <tbody>{{ $slot }}</tbody>
    </table>
</div>
