<x-right-card name="recipe-{{$recipe['id']}}-right-card">
    <div class="flex flex-col gap-6 relative pt-4">
        <x-heroicon-o-x-mark class="absolute text-black-500 w-8 top-1 right-1 cursor-pointer" x-on:click="show = false"/>
        <img src="{{$recipe->getFIrstMediaUrl('image')}}" class="w-full max-w-60 m-auto" alt="">
        <p class="text-xl font-medium">{{$recipe['name']}}</p>
        <p class="">{{$recipe['creator']}}</p>
        <p>{{$recipe['ingredients']}}</p>
        <div class="w-full h-px bg-gray-300"></div>
        <p>{{$recipe['cooking_method']}}</p>
    </div>
</x-right-card>
