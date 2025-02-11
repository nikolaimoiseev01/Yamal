<?php

namespace App\Livewire\Components\Portal;

use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $telephone;
    public $contact_method = 'email';
    public $question;

    public function render()
    {
        return view('livewire.components.portal.contact-form');
    }

    public function send() {
        dd('SENT!');
    }
}
