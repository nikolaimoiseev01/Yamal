<?php

namespace App\Livewire\Components\Portal;

use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $contact_method = 'email';
    public $contact;

    public $question;

    public $sent = false;
    public function render()
    {
        return view('livewire.components.portal.contact-form');
    }

    public function send() {

        $subject = 'Сообщение с сайта';
        $question = 'Вопрос: ' . $this->question;
        Mail::to('tomas232@mail.ru')->send(new \App\Mail\ContactForm($this->name, $this->contact, $this->question));
        $this->sent = True;
    }
}
