<?php

namespace App\Http\Livewire;

use Livewire\Component;
use ShoppingCart;

class Cart extends Component
{
    public function removeProduct($rawId){
        ShoppingCart::remove($rawId);
        $this->emit('ItemAddedToCart');
    }

    public function updateQty($rawId, $qty){
        ShoppingCart::update($rawId, $qty);
        $this->emit('ItemAddedToCart');
    }

    public function render()
    {
        $data['items'] = ShoppingCart::all();
        $data['totalPrice'] = ShoppingCart::total();
        return view('livewire.cart')->with($data);
    }
}
