<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;

class Products extends Component
{
    use WithPagination;
    protected $paginationTheme ='simple-bootstrap';
    public $perPage;

    public function mount(){
        $this->perPage = 1;
    }

    public function render()
    {
        $products = Product::with('category','images','sizes')->where('status', 'active')->paginate($this->perPage);
        return view('livewire.products')->with('products', $products);
    }
}
