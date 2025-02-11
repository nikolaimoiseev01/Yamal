<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Search extends Component
{
    public $search_input;

    public function render()
    {
        return view('livewire.components.search');
    }

    public function search() {
        $this->dispatch('changeProductType', search: $this->search_input);
    }
}
