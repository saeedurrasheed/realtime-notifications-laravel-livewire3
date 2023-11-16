@props([
    'method' => 'POST',
    'action',
    'autocomplete' => 'off',
])
<form
    action="{{ $action }}"
    method="{{ $method }}"
    autocomplete="{{ $autocomplete }}"
    class="bg-white space-y-6 border rounded px-10 pt-4 pb-10">
    @csrf
    {{ $slot }}
    @if(strtolower($method) === 'delete')
        @method('DELETE')
    @endif
</form>
