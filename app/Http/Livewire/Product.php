<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product As ProductModel;
use ShoppingCart;

class Product extends Component
{
    public $productId, $name, $price, $size, $quantity, $image;

    protected $rules = [
        "size" => "required",
        "quantity" => "required|numeric|min:1"
    ];
    
    public function mount($id){
        $this->productId = $id;
        $product = ProductModel::where(['id' => $this->productId, 'status' => "active"])->with('images', 'category', 'sizes')->first();
        if(empty($product)){
            session()->flash('error', 'Product not found');
            return redirect()->route('home');
        }
        if($product->stock == 0){
            $this->quantity = 0;
        }
        else{
            $this->quantity = 1;
        }
    }

    public function addToCart(){
        $this->validate();
        ShoppingCart::add($this->productId, $this->name, $this->quantity, $this->price, ['size' => $this->size, 'image' => $this->image]);
        $this->emit('ItemAddedToCart');
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
        $this->name = $data['product']->name;
        $this->price = $data['product']->price;
        if(isset($data['product']->images[0]->image)){
            $this->image = $data['product']->images[0]->image;
        }
        return view('livewire.product')->with($data);
    }
}
