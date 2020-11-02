<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class Login extends Component
{
    public $form = [
        "email" => "",
        "password" => "",
        "remember_me" => ""
    ];

    protected $rules = [
        "form.email" => "required|email|exists:users,email,role_id,1",
        "form.password" => "required"
    ];

    protected $messages = [
        "form.email.required" => "Email Address is required",
        "form.email.email" => "Email format in invalid",
        "form.email.exists" => "Email format not found",
        "form.password.required" => "Password is required"
    ];

    public function updated($fields){
        $this->validateOnly($fields);
    }

    public function save(){
        $this->validate();
        $auth = auth()->guard('admin')->attempt(['email' => $this->form['email'], 'password' => $this->form['password']]);
        if($auth){  
            session()->flash('message', 'You are successfully logged in');
            return redirect()->route('admin.home');
        }
        session()->flash('error', 'invalid password');
        return;
    }

    public function render()
    {
        return view('livewire.admin.login')->layout('layouts.admin.app');
    }
}
