<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Home extends Component
{
    public function render()
    {
        $products = [];
        $products['feature_products'] = Product::with('category', 'images', 'sizes')->where('status', 'active')->take(10)->get();
        $products['latest_products'] = Product::with('category', 'images', 'sizes')->where('status', 'active')->latest()->take(10)->get();
        $products['top_rated_products'] = Product::with('category', 'images', 'sizes')->where('status', 'active')->take(10)->get();
        return view('livewire.home')->with($products);
    }
}
