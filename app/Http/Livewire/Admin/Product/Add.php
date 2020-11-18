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
    public $main_categories = [
        "cosmetics",
        "jewelry"
    ];
    
    public $image_message;
    public $name, $price, $um, $description, $stock, $main_category, $category, $manufacturer;

    public function addSize(){
        $this->size[] = "";
    }

    public function removeSize($i){
        unset($this->size[$i]);
    }

    protected $image_rules = [
        'images.*' => 'mimes:jpg,jpeg,png|max:1000'
    ];

    protected $rules = [
        "name" => "required",
        "main_category" => "required|in:cosmetics,jewelry"
    ];

    protected $messages = [
        "name.required" => "Product Name is required",
        "main_category" => "Main Category should be Cosmetics or jewelry",
        'images.*' => [
            'mime' => 'image should be in JPG, JPEG or PNG Format',
            'max' => 'image size should be 1MB or less'
        ]
    ];

    public function updatingImages($images){
        $this->tmp_images = $this->images;
    }
    
    public function updatedImages(){
        // dd([$this->images, $images]);
        $validator = Validator::make(['images' => $this->images], $this->image_rules, [
            'images.*' => [
                'mime' => 'image should be in JPG, JPEG or PNG Format',
                'max' => 'image size should be 1MB or less'
            ]
        ]);
        if($validator->fails()){
            // dd($this->tmp_images);
            $this->images = $this->tmp_images;
            // This will give you full access to the error bag.
            $errors = $this->getErrorBag();
            // With this error bag instance, you can do things like this:
            foreach($validator->errors()->get('images.*') as $err){
                $errors->add('images.*', $err[0]);
            }
            // return;
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
