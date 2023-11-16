@props([
    'columns' => 2,
])
<section class="mb-8">
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h2 id="applicant-information-title" class="text-lg font-medium leading-6 text-gray-900">{{ $heading }}</h2>
            @if(isset($subHeading))
                <p class="mt-1 max-w-2xl text-sm text-gray-500">{{ $subHeading }}</p>
            @endif
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-{{ $columns }}">
                {{ $slot }}
            </dl>
        </div>
        <div class="bg-gray-50 px-4 py-4 text-center font-medium text-gray-500 hover:text-gray-700 sm:rounded-b-lg">
            @if(isset($footer))
                {{ $footer }}
            @endif
        </div>
    </div>
</section>
