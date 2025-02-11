<x-right-card name="product-{{$product['id']}}-right-card">
    <div class="flex flex-col gap-6 relative">
        <x-heroicon-o-x-mark class="absolute text-black-500 w-8 top-4 right-4 cursor-pointer" x-on:click="show = false"/>
        <img src="{{$product->getFIrstMediaUrl('image')}}" class="w-full max-w-60 m-auto" alt="">
        <p class="text-xl font-medium">{{$product['name']}}</p>
        <p class="">{{$product['packaging']}}, {{$product['weight']}}</p>
        <p>{{$product['description']}}</p>
        <p><span class="font-semibold">Состав: </span>{{$product['compound']}}</p>
        <p><span class="font-semibold">Пищевая ценность в 100 г  продукта: </span>{{$product['worth']}}</p>
        <p><span class="font-semibold">Дата изготовления: </span>{{$product['date_manufactured']}}</p>
        <p><span class="font-semibold">Срок годности: </span>{{$product['expiration']}}</p>
    </div>
</x-right-card>
