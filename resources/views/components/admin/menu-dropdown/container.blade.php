<div
    x-data="{ openMenu: false }"
    class="relative inline-block text-left">
    <div>
        <button
            @click="openMenu = !openMenu"
            @click.away="openMenu = false"
            @keydown.window.escape="openMenu = false"
            type="button"
            class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white p-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
            aria-expanded="true"
            aria-haspopup="true"
        >
            <x-heroicon-o-cog-6-tooth class="w-4 h-4 text-gray-500"/>
        </button>
    </div>
    <div
        x-cloak
        x-show="openMenu"
        class="absolute right-0 z-10 mt-2 min-w-[8rem] max-w-[14rem] origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
        role="menu"
        aria-orientation="vertical"
        aria-labelledby="menu-button"
        tabindex="-1"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95"
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
    >
        <div class="py-1 divide-y divide-gray-100" role="none">
            {{ $slot }}
        </div>
    </div>
</div>
