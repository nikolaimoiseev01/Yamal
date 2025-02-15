<?php

namespace App\Livewire\Components\Cards;

use App\Models\Recipe;
use Livewire\Component;

class RecipeRightCard extends Component
{
    public $recipe;

    protected $listeners = ['updateRecipeRightCard'];

    public function render()
    {
        return view('livewire.components.cards.recipe-right-card');
    }


    public function updateRecipeRightCard($id) {
        $this->recipe = Recipe::where('id', $id)->first();
    }
}
