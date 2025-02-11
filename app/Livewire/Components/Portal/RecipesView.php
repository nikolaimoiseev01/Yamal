<?php

namespace App\Livewire\Components\Portal;

use App\Models\Recipe;
use App\Models\RecipeType;
use Livewire\Component;

class RecipesView extends Component
{
    public $recipeTypes;
    public $recipes;
    public $recipe_type = 1;

    public function render()
    {
        $this->recipes = Recipe::where('recipe_type_id', $this->recipe_type)->get();
        return view('livewire.components.portal.recipes-view');
    }


    public function mount()
    {
        $this->recipeTypes = RecipeType::whereHas('recipe')->get();
    }

    public function updatedrecipeType($value)
    {
        $this->dispatch('make_recipe_slider');
    }
}
