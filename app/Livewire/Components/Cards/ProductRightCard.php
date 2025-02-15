<?php

namespace App\Livewire\Components\Cards;

use App\Models\Product;
use Livewire\Component;

class ProductRightCard extends Component
{
    public $product;
    protected $listeners = ['updateProductRightCard'];
    public function render()
    {
        return view('livewire.components.cards.product-right-card');
    }

    public function updateProductRightCard($id) {
        $this->product = Product::where('id', $id)->first();
    }
}
