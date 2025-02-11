<div {{ $attributes->merge(['class' => 'flex relative flex-col'])}}>
    <x-heroicon-o-arrow-right class="swiper-button-next w-10 text-bright-500 next2"/>
    <div class="swiper recipeSlider sm:!w-full">
        <div class="swiper-wrapper">
            @foreach($recipes as $key => $recipe)
                <x-cards.recipe class="swiper-slide" :recipe="$recipe"/>
            @endforeach
        </div>
    </div>
    <div class="hidden md:flex gap-8 w-full justify-center mt-4">
        <x-heroicon-o-arrow-left class="swiper-button-prev !mt-0 !relative w-10 text-bright-500 prev2"/>
        <x-heroicon-o-arrow-right class=" swiper-button-next !mt-0 !relative w-10 text-bright-500 next2"/>
    </div>
    <x-heroicon-o-arrow-left class="swiper-button-prev w-10 text-bright-500 prev2"/>
</div>

<style>
    .recipeSlider {
        width: 90%;
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

    function makeRecipeSlider() {
        var swiper2 = new Swiper(".recipeSlider", {
            spaceBetween: 20,
            lazy: true,
            slidesPerView: 1,
            navigation: {
                nextEl: ".next2",
                prevEl: ".prev2",
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

    document.addEventListener('make_recipe_slider', () => {
        setTimeout(makeRecipeSlider, 100)
    })

    makeRecipeSlider()

</script>
@endscript
