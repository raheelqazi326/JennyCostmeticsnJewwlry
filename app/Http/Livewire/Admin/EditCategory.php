<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\models\Category;

class EditCategory extends Component
{
    public $category_id;
    public $name;
    public $main_category;
    public $status;
    public $main_categories = [
        "cosmetics",
        "jewelry"
    ];
    public $statuses = [
        "active",
        "deactive"
    ];
    
    protected $rules = [
        "main_category" => "required|in:cosmetics,jewelry",
        "status" => "required|in:active,deactive"
    ];

    protected $messages = [
        "name.required" => "Category Name is required",
        "name.unique" => "Category Name already exists",
        "main_category" => "Main Category should be Cosmetics or jewelry",
        'status' => 'Status should be Active and Inactive'
    ];

    public function mount($id){
        $this->category_id = $id;
        $rule["name"] = "required|unique:categories,id,$id";
        $category = Category::find($this->category_id)->first();
        $this->name = $category->name;
        $this->main_category = $category->main_category;
        $this->status = $category->status;
    }

    public function updated($field){
        // dd($field);
        $this->validateOnly($field, $this->rules);
    }
    
    public function save(){
        $this->validate();
        $category = Category::find($this->category_id)->first();
        $category->name = $this->name;
        $category->main_category = $this->main_category;
        $category->status = $this->status;
        $category->save();
        session()->flash('message', 'Category has been updated successfully');
        return redirect()->route('admin.category');
    }

    public function render()
    {
        return view('livewire.admin.edit-category')->layout('layouts.admin.home');
    }
}
