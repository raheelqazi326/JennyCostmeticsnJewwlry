<?php

namespace App\Http\Livewire\Admin\Product;

use Livewire\Component;
use App\Models\Category as CategoryModel;
use Livewire\WithPagination;

class Show extends Component
{
    use WithPagination;
    public $perPage = 10;
    protected $paginationTheme ='bootstrap';
    public $search;

    public function mount(){
        $this->search="";
    }
    public function resetSearch(){
        $this->search="";
        $this->resetPage();
    }
    public function updatedSearch(){
      $this->resetPage();
    }

    public function delete($id){
        $category = CategoryModel::find($id);
        if(!empty($category)){
            $category->delete();
        }
    }

    public function render()
    {
        $categories = CategoryModel::search($this->search)->paginate($this->perPage);
        return view('livewire.admin.product.show')->layout('layouts.admin.home')->with('categories',$categories);
    }

    public function updatedPerPage(){
        $this->resetPage();
    }
}
