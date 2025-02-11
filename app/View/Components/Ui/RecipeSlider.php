<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class RecipeSlider extends Component
{
    /**
     * Create a new component instance.
     */

    public $recipes;
    public function __construct($recipes)
    {
        $this->recipes = $recipes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.recipe-slider');
    }
}
