<?php

namespace App\Livewire\Components\Portal;

use App\Models\Product;
use App\Models\ProductType;
use Livewire\Component;

class ProductsView extends Component
{
    public $productTypes;
    public $products;

    public $product_type = 1;


    protected $listeners = ['changeProductType'];

    public function render()
    {
        $this->products = Product::where('product_type_id', $this->product_type)->get();
        return view('livewire.components.portal.products-view');
    }

    public function mount()
    {
        $this->productTypes = ProductType::whereHas('product')->get();
    }

    public function updatedProductType($value)
    {
        $this->dispatch('make_product_slider');
    }
    #[On('changeProductType')]
    public function changeProductType($search) {
        dd('test232');
    }

}
