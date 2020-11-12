<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use App\models\Category;

class Add extends Component
{
    public $tab = "information";
    public $tabs = ["information","association","images"];
    public $sku = '';
    public $name;
    public $price;
    public $um;
    public $description;
    public $stock;
    public $main_category;
    public $category;
    public $manufacturer;
    public $size = [];
    public $main_categories = [
        "cosmetics",
        "jewelry"
    ];

    public function addSize(){
        $this->size[] = "";
    }

    public function removeSize($i){
        unset($this->size[$i]);
    }

    protected $rules = [
        "name" => "required",
        "main_category" => "required|in:cosmetics,jewelry"
    ];

    protected $messages = [
        "name.required" => "Product Name is required",
        "main_category" => "Main Category should be Cosmetics or jewelry"
    ];

    public function updated($field){
        // dd($field);
        $this->validateOnly($field, $this->rules);
    }

    public function changeTab($value){
        if(in_array($value, $this->tabs)){
            $this->tab = $value;
        }
        else{
            $this->tab = "information";
        }
    }
    
    public function save(){
        $this->validate();
        $category = new Category;
        $category->name = $this->name;
        $category->main_category = $this->main_category;
        $category->save();
        session()->flash('message', 'Category has been added successfully');
        return redirect()->route('admin.category');
    }

    public function mount(){
        $this->size[] = "";
    }

    public function render()
    {
        return view('livewire.admin.product.add')->layout('layouts.admin.home');
    }
}
