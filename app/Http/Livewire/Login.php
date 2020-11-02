<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public function save(){
        dd(1);
    }

    public function render()
    {
        return view('livewire.login');
    }
}
