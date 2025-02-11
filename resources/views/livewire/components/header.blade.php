<header class="w-full mb-8 py-5">
    <div class="safe-area-wrap flex items-center justify-between">
        <div class="flex gap-4 items-center">
            <x-logo-main-black/>
        </div>

        <div onclick="scrollToBlock('about')" class="flex gap-8 md:hidden">
            <x-link-simlpe href="#about">О бренде</x-link-simlpe>
            <x-link-simlpe href="#products">Продукты</x-link-simlpe>
            <x-link-simlpe href="#manufacture">Производство</x-link-simlpe>
            <x-link-simlpe href="$recipes">Рецепты</x-link-simlpe>
            <x-link-simlpe href="#more">Узнать больше</x-link-simlpe>
        </div>

        <livewire:components.search/>

        <div class="hidden md:flex  justify-center">
            <div class="flex justify-center">
                <div x-data="{ open: false }" class="relative flex flex-col justify-center">
                    <div @click="open = !open"
                         class="tham tham-e-squeeze tham-w-8"
                         :class="open ? 'tham-active' : ''"
                    >
                        <div class="tham-box">
                            <div class="tham-inner"></div>
                        </div>
                    </div>
                    <div
                        x-show="open"
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-90"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-90"
                        class="absolute right-0 top-6 mt-2 w-48 bg-white rounded-md shadow-lg overflow-hidden z-20">
                        <ul class="p-4 text-lg flex flex-col gap-2">
                            <li>
                                <x-link-simlpe href="#about">О бренде</x-link-simlpe>
                            </li>
                            <li>
                                <x-link-simlpe href="#products">Продукты</x-link-simlpe>

                            </li>
                            <li>
                                <x-link-simlpe href="#manufacture">Производство</x-link-simlpe>
                            </li>
                            <li>
                                <x-link-simlpe href="#more">Узнать больше</x-link-simlpe>
                            </li>
                            <li>
                                <x-link-simlpe href="$recipes">Рецепты</x-link-simlpe>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @script
        <script> /* Чтобы выполнялось каждый раз при wire:navigate */
            setTimeout(function () {
                mobileInputCreate()
            }, 1)
        </script>
        @endscript


    </div>
</header>
