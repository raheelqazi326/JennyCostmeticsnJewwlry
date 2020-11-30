<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Order AS OrderModel;

class Order extends Component
{
    use WithPagination;
    public $perPage = 10;
    protected $paginationTheme ='bootstrap';
    public $search;

    public function mount(){
        $this->search = "";
    }
    public function resetSearch(){
        $this->search = "";
        $this->resetPage();
    }
    public function updatedSearch(){
      $this->resetPage();
    }

    public function render()
    {
        $data = [];
        $data['orders'] = OrderModel::search($this->search)->paginate($this->perPage);
        return view('livewire.admin.order')->with($data)->layout('layouts.admin.home');
    }
}
