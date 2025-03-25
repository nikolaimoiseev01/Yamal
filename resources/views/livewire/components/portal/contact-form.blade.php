<div style="background-image: url('/fixed/contact_form_bg.png')"
     class="bg-cover rounded-44"
>
    <form wire:submit="send" x-data class="flex content-between content py-12 gap-4 lg:flex-col">
        <div class="flex flex-col max-w-sm lg:max-w-none">
            <h2 class="mb-8 lg:hidden">Узнать больше</h2>
            <p class="text-3xl mb-8">Остались вопросы?<br>Есть пожелания?</p>
            <p class="mb-14">Мы с удовольствием ответим вам по телефону, в мессенджере или по электронной почте</p>
            <textarea wire:model="question" class="flex-1 resize-none" placeholder="Ваш вопрос"></textarea>
        </div>
        <div
              class="gap-12 w-full max-w-[643px] flex flex-col bg-bright-600 bg-opacity-80 py-12 px-28 lg:px-4 rounded-40  lg:flex-col">
            <input type="text" wire:model="name" placeholder="Имя Фамилия (не обязательно)">
            <div class="flex flex-col">
                <p class="mb-6">Предпочтительный способ связи</p>
                <div class="flex gap-16 mb-6">
                    <label for="email" class="flex flex-col items-start gap-1">
                        <input type="radio" id="email" name="contact_method" value="email"
                               wire:model.live="contact_method">
                        <span>e-mail</span>
                    </label>
                    <label for="phone" class="flex flex-col items-start gap-1">
                        <input type="radio" id="phone" name="contact_method" value="phone"
                               wire:model.live="contact_method">
                        <span>звонок</span>
                    </label>
                </div>
                @if($contact_method === 'phone')
                    <input type="text" name="contact" wire:model="contact" placeholder="Телефон" required>
                @else
                    <input type="email" name="contact" wire:model="contact" placeholder="Email" required>
                @endif
{{--                <input x-show="$wire.contact_method === 'phone'" type="text" name="telephone" wire:model="telephone" placeholder="Телефон">--}}
{{--                <input x-show="$wire.contact_method === 'email'" type="text" name="email" wire:model="email" placeholder="Email">--}}
            </div>
            <label for="agreement" class="flex items-center gap-2">
                <input type="checkbox" id="agreement" required>
                <span class="text-gray-500">Я даю согласие на обработку персональных данных</span>
            </label>
            <x-link-button class="w-full" type="submit">Отправить</x-link-button>
        </form>
    </div>
    {{-- Be like water. --}}
</div>
