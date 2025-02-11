<div {{ $attributes->merge(['class' => 'flex relative flex-col'])}}>
    <x-heroicon-o-arrow-right class="swiper-button-next w-10 text-bright-500 next"/>
    <div class="swiper productSlider sm:!w-full">
        <div class="swiper-wrapper">
            @foreach($products as $key => $product)
                <x-cards.product class="swiper-slide" :product="$product"/>
            @endforeach
        </div>
    </div>
    <div class="hidden md:flex gap-8 w-full justify-center mt-4">
        <x-heroicon-o-arrow-left class="swiper-button-prev !mt-0 !relative w-10 text-bright-500 prev"/>
        <x-heroicon-o-arrow-right class=" swiper-button-next !mt-0 !relative w-10 text-bright-500 next"/>
    </div>
    <x-heroicon-o-arrow-left class="swiper-button-prev w-10 text-bright-500 prev"/>
</div>

<style>
    .productSlider {
        width: 90%;
        max-width: 980px;
        height: 100%;
    }

    @media (max-width: 648px) {
        .swiper {
            width: 80%;
        }
    }

    .swiper-wrapper {
        display: flex;
    }

    .swiper-slide {
        /*flex-shrink: 0; !* Убедитесь, что слайды не сжимаются *!*/
        /*width: 100%;    !* Один слайд на всю ширину *!*/
    }
</style>
@script
<script>
    document.addEventListener('livewire:initialized', () => {
        console.log('test1')
    })

    function makeProductSlider() {
          var swiper2 = new Swiper(".productSlider", {
            spaceBetween: 20,
            lazy: true,
            slidesPerView: 1,
            navigation: {
                nextEl: ".next",
                prevEl: ".prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
            },
        });
    }

    document.addEventListener('make_product_slider', () => {
        setTimeout(makeProductSlider, 100)
    })

    makeProductSlider()

</script>
@endscript
