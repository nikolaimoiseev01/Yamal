<x-mail::layout>
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('app.url')">
<x-logo-main-black style="width: 70px;"/>
</x-mail::header>
</x-slot:header>

{{-- Body --}}
{{ $slot }}

@isset($subcopy)
<x-slot:subcopy>
<x-mail::subcopy>
{{ $subcopy }}
</x-mail::subcopy>
</x-slot:subcopy>
@endisset

{{-- Footer --}}
<x-slot:footer>
<x-mail::footer>
© {{ date('Y') }} {{ config('app.name') }}. @lang('Все права сохранены')
</x-mail::footer>
</x-slot:footer>
</x-mail::layout>
