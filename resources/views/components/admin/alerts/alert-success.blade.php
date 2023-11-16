@if (session()->has('message'))
    <div class="p-4 mb-4 text-sm text-green-900 rounded-lg bg-green-100" role="alert">
        {{ session('message') }}
    </div>
@endif
