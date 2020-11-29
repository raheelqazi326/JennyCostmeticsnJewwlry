<?php

namespace App\Http\Livewire;

use Livewire\Component;
use ShoppingCart;
use Illuminate\Support\Collection; 

class CartWidget extends Component
{   
    protected $listeners = ["ItemAddedToCart"];
    
    public function ItemAddedToCart(){
        $data['items'] = ShoppingCart::all();
        $data['totalItems'] = ShoppingCart::countRows();
        $data['totalPrice'] = ShoppingCart::total();
    }

    public function render()
    {
        $data['items'] = ShoppingCart::all();
        $data['totalItems'] = ShoppingCart::countRows();
        $data['totalPrice'] = ShoppingCart::total();
        return view('livewire.cart-widget')->with($data);
    }
}
