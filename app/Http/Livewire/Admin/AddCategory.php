<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\models\Category;

class AddCategory extends Component
{
    public $name;
    public $main_category;
    public $main_categories = [
        "cosmetics",
        "jewelry"
    ];

    protected $rules = [
        "name" => "required|unique:categories",
        "main_category" => "required|in:cosmetics,jewelry"
    ];

    protected $messages = [
        "name.required" => "Category Name is required",
        "name.unique" => "Category Name already exists",
        "main_category" => "Main Category should be Cosmetics or jewelry"
    ];

    public function updated($field){
        // dd($field);
        $this->validateOnly($field, $this->rules);
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

    }

    public function render()
    {
        return view('livewire.admin.add-category')->layout('layouts.admin.home');
    }
}
