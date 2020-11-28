<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product As ProductModel;

class Product extends Component
{
    public $productId;

    public function mount($id){
        $this->productId = $id;
    }

    public function render()
    {
        $data = [];
        $data['product'] = ProductModel::where(['id' => $this->productId, 'status' => "active"])->with('images', 'category', 'sizes')->first();
        if(empty($data['product'])){
            session()->flash('error', 'Product not found');
            return redirect()->route('home');
        }
        $data['category_products'] = ProductModel::where(['category_id' => $data['product']->category_id, 'status' => "active"])->with('images', 'category', 'sizes')->get();
        return view('livewire.product')->with($data);
    }
}
