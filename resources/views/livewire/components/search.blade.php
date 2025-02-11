<div x-data="{ isOpen: false }" class="relative md:hidden">
    <!-- Иконка поиска -->
        <x-heroicon-o-magnifying-glass @click="isOpen = !isOpen" class="w-6 h-6 text-black-500 cursor-pointer" />

    <!-- Строка поиска -->
    <div
        x-show="isOpen"
        @click.outside="isOpen = false"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-95"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-95"
        class="absolute top-0 right-0 w-64 bg-white shadow-lg rounded-lg p-2 flex items-center space-x-2"
    >
        <input
            type="text"
            wire:model="search_input"
            class="w-full border border-gray-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-300"
            placeholder="Поиск..."
        />
        <x-heroicon-o-magnifying-glass wire:click.prevent="search()" @click="isOpen = !isOpen" class="w-6 h-6 text-black-500 cursor-pointer" />
    </div>
</div>
