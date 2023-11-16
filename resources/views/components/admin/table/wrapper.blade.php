<div {{ $attributes->merge(['class' => 'p-4 bg-white relative shadow-md sm:rounded-lg overflow-hidden mb-8']) }}>
    <div class="sm:flex sm:items-center mb-8">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ $heading }}</h1>
            @if(isset($subHeading))
                <p class="mt-2 text-sm text-gray-700">{{ $subHeading }}</p>
            @endif
        </div>
    </div>
    {{ $slot }}
</div>
