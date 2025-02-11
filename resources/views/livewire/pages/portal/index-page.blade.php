<main>
    <section class="safe-area-wrap flex gap-5 mt-5 mb-20 md:flex-col">
        <div style="background-image: url('/fixed/welcome_img_1.png')"
             class="flex items-start flex-col justify-center w-1/2 min-h-[742px] bg-cover rounded-44 pl-28 xl:pl-8 transition-all duration-300 ease-out hover:scale-[1.01] cursor-pointer hover:shadow-xl
             md:w-full md:p-9 md:items-center md:min-h-0
             ">
            <div class="flex items-start flex-col justify-center gap-6 ">
                <h1 class="text-6xl leading-[78px] xl:text-5xl text-4xl md:text-[40px] md:!leading-[58px] md:font-medium">Ямал Гурмэ -<br>деликатесы<br>с края земли</h1>
                <p>«Ямал Гурмэ» — это продукты<br>
                    сурового севера, редкие<br>
                    и уникальные.<br>
                    Мы собрали лучшие из них.</p>
                <x-link href="#products">Купить</x-link>
            </div>

        </div>

        <div class="flex flex-col w-1/2 gap-5 md:w-full">
            <a href="#about" style="background-image: url('/fixed/deers_1.png')"
               class="relative bg-cover min-h-[441px] rounded-44 transition-all duration-300 ease-out hover:scale-[1.01] cursor-pointer hover:shadow-xl
               md:w-full md:h-auto md:flex md:items-center md:p-7 md:justify-between md:min-h-0 md:bg-fixed md:bg-contain
               ">
                <h2 class="absolute bottom-10 left-10 text-bright-500 md:relative md:left-0 md:bottom-0 md:h-fit">О бренде</h2>
                <x-heroicon-o-arrow-up-right class="w-6 text-bright-500 absolute top-10 right-10 md:relative md:left-0 md:top-0 "/>
            </a>

            <div class="flex gap-5 flex-1 lg:flex-col">
                <a href="#products"
                   class="relative w-1/2 rounded-44 bg-gray-300 transition-all duration-300 ease-out hover:scale-[1.01] cursor-pointer hover:shadow-xl
                    lg:w-full lg:h-1/2 lg:flex lg:items-center lg:p-7 lg:justify-between
                    ">
                    <img src="/fixed/pashtet_1.png" class="absolute -rotate-[20deg] left-7 -top-7 w-56 lg:hidden" alt="">
                    <h2 class="absolute bottom-10 left-10 lg:relative lg:left-0 lg:bottom-0 lg:h-fit">Продукты</h2>
                    <x-heroicon-o-arrow-up-right class="w-6 text-bright-500 absolute top-10 right-10  lg:relative lg:left-0 lg:top-0 "/>
                </a>

                <a href="#recipes" style="background-image: url('/fixed/food_1.png')"
                   class="relative bg-cover w-1/2 rounded-44 transition-all duration-300 ease-out hover:scale-[1.01] hover:shadow-xl lg:w-full
                    lg:h-1/2 lg:flex lg:items-center lg:p-7 lg:justify-between  md:bg-fixed md:bg-auto">
                    <h2 class="absolute bottom-10 left-10 text-bright-500 lg:relative lg:left-0 lg:bottom-0 lg:h-fit">Рецепты</h2>
                    <x-heroicon-o-arrow-up-right class="w-6 text-bright-500 absolute top-10 right-10  lg:relative lg:left-0 lg:top-0 "/>
                </a>
            </div>
        </div>
    </section>


    <section id="about" class="safe-area-wrap relative bg-black-500 text-bright-500 rounded-44 mb-20">
        <img src="/fixed/about_map.png" class="absolute h-full right-12 z-0 md:hidden" alt="">
        <div class="content py-10 flex justify-between relative md:flex-col gap-10">
            <div class="pt-14 md:pt-0">
                <h2 class="mb-9">О бренде</h2>
                <p class="max-w-md">«Ямал Гурме» — бренд для ценителей уникальных вкусов и ярких
                    гастрономических впечатлений.<br><br>
                    Наши продукты — от чистой природы Cевера за Полярным кругом.<br><br>
                    От процесса добычи до производства проходит минимальное количество времени, чтобы на вашем столе
                    была самая свежая продукция.<br><br>
                    Весь ассортимент проходит строжайший контроль качества на всех этапах производства в
                    собственной лаборатории.</p>
            </div>
            <div class="flex flex-col gap-9 md:flex-row justify-center">
                <img src="/fixed/deers_2.png" class="w-80 h-80 rounded-[20px] object-cover lg:aspect-square md:w-48 sm:!w-32 md:h-auto" alt="">
                <img src="/fixed/nature_1.png" class="w-80 h-80 rounded-[20px] object-cover lg:aspect-square md:w-48 sm:!w-32 md:h-auto" alt="">
            </div>
        </div>
    </section>

    <livewire:components.portal.products-view/>

    <section x-data="videoPlayer()" id="manufacture" class="content mb-20">
        <div class="flex justify-between mb-9 gap-8 md:flex-col md:items-center">
            <div class="flex flex-col justify-center">
                <h2 class="mb-8">Производство</h2>
                <p class="max-w-md">Современные производственные линии по упаковке продукции и прямые
                    авиапоставки поддерживают высокое качество и свежесть продуктов «Ямал Гурмэ».<br><br>
                    Без добавок, химикатов и ГМО — только натуральные продукты с превосходным вкусом — наш принцип.</p>
            </div>
            <div class="max-w-[556px] h-[424px] w-full  rounded-[20px] overflow-hidden relative flex items-center justify-center">
                <div id="video_cover" style="background-image: url('/fixed/video_cover.jpg')"
                     class="w-full z-20 bg-cover absolute flex items-center justify-center bottom-0 top-0 h-full">
                    <div @click="playVideo('manufactured_video')" class="flex items-center justify-center bg-bright-500 p-5 bg-opacity-80 rounded-full">
                        <x-heroicon-s-play class="w-9"></x-heroicon-s-play>
                    </div>

                </div>
                <video id="manufactured_video" class="" controls>
                    <source src="/fixed/test_video.mp4" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
            </div>

            <script>
                function videoPlayer() {
                    return {
                        playVideo(videoId) {
                            const videoElement = document.getElementById(videoId);
                            if (videoElement) {
                                videoElement.classList.remove('hidden'); // Показываем видео
                                videoElement.play(); // Запускаем видео
                            }
                            const videoCover = document.getElementById('video_cover');
                            videoCover.style.display = 'none'; // Скрываем кнопку
                        }
                    };
                }
            </script>

        </div>
        <div class="flex gap-14  md:flex-col md:items-center">
            <img src="/fixed/manufacture_2.png" class="w-52 h-52 object-cover rounded-[20px] md:w-full" alt="">
            <p class="my-auto max-w-[350px]">Весь ассортимент производится в строгом соответствии с ГОСТом, а
                качество продукции
                проверяется в собственной лаборатории.</p>
        </div>
    </section>

    <livewire:components.portal.recipes-view/>

    <section class="safe-area-wrap mb-20 ">
        <livewire:components.portal.contact-form/>
    </section>
</main>
