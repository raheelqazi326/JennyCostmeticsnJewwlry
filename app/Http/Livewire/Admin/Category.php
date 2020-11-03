<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category as CategoryModel;
use Livewire\WithPagination;

class Category extends Component
{
    use WithPagination;
    public $perPage = 10;
    public function render()
    {
        $categories = CategoryModel::paginate($this->perPage);
        return view('livewire.admin.category')->layout('layouts.admin.home')->with('categories',$categories);
    }
}
