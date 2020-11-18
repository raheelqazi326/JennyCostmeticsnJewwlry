<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\models\Category;
use Validator;

class Add extends Component
{
    use WithFileUploads;
    public $tab;
    public $tabs = ["information","association","images"];
    public $sku = '';
    public $size = [];
    public $images = [];
    public $tmp_images = [];
    public $tmp_images_old = [];
    public $main_categories = [
        "cosmetics",
        "jewelry"
    ];
    
    public $name, $price, $um, $description, $stock, $main_category, $category, $manufacturer;

    public function addSize(){
        $this->size[] = "";
    }

    public function removeSize($i){
        unset($this->size[$i]);
    }

    protected $rules = [
        "name" => "required",
        "main_category" => "required|in:cosmetics,jewelry",
        'images.*' => 'image|max:1024'
    ];

    protected $messages = [
        "name.required" => "Product Name is required",
        "main_category" => "Main Category should be Cosmetics or jewelry",
        // 'images.*.image' => 'image should be image',
        // 'images.*.max' => 'image size should be 1MB or less',
    ];

    public function updatingImages($images){
        $this->tmp_images_old = $this->tmp_images;
        $this->tmp_images = $this->images;
    }

    public function updatedImages(){
        // dd([$this->images, $images]);
        $validator = Validator::make($this->images, [
            'images.*' => 'mimes:jpg,jpeg,png|max:1000' // 1MB
        ]);
        if($validator->fails()){
            $this->images = $this->tmp_images_old;
            session()->flash('errors', $validator->errors());
        }
        else{
            $this->images = array_merge($this->tmp_images,$this->images);
        }
    }

    public function removeImage($index){
        unset($this->images[$index]);
    }

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
        $this->tab = "";
    }

    public function render()
    {
        return view('livewire.admin.product.add')->layout('layouts.admin.home');
    }
}
