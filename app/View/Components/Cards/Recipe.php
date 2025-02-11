<?php

namespace App\View\Components\Cards;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Recipe extends Component
{
    /**
     * Create a new component instance.
     */
    public $recipe;
    public function __construct($recipe)
    {
        $this->recipe = $recipe;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.recipe');
    }
}
