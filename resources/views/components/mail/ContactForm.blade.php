@component('mail::message')
   <b> Новый вопрос с сайта ямал-гурмэ.рф!</b><br>

   <b>Имя:</b> {{ $name }}<br>
   <b>Контакт:</b> {{ $contact }}<br>
   <b>Вопрос:</b> {{ $question }}
@endcomponent
