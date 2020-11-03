<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\models\Category;

class AddCategory extends Component
{
    public $name;

    protected $rules = [
        "name" => "required|unique:categories"
    ];

    protected $messages = [
        "name.required" => "Category Name is required",
        "name.unique" => "Category Name already exists"
    ];

    public function updated($field){
        $this->validate();
    }

    public function save(){
        $this->validate();
        $category = new Category;
        $category->name = $this->name;
        $category->save();
        session()->flash('message', 'Category has been added successfully');
        return redirect()->route('admin.category');
    }

    public function render()
    {
        return view('livewire.admin.add-category')->layout('layouts.admin.home');
    }
}
