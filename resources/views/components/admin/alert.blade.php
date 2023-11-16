@if($errors)
<ul class="text-red-500">
    @foreach($errors as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
