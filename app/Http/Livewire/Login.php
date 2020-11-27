<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Mail;

class Login extends Component
{
    public $email, $password;
    protected $rules = [
        "email" => "required|email|exists:users",
        "password" => 'required'
    ];

    public function updated($field){
        $this->validateOnly($field);
    }

    public function resend_email($code, $email){
        Mail::send('mail.verification', ["code"=>$code, 'email'=>$email], function ($message) use($email) {
            $message->sender('emailforhnh@gmail.com', 'JennyShop');
            $message->to($email);
            $message->subject('Verification');
        });
        session()->flash('message', 'Verification Link has been sent. Please Check your email');
        return redirect()->route('login');
    }

    public function login(){
        $this->validate();
        $credentials = [
            "email" => $this->email,
            "password" => $this->password
        ];
        if(auth()->attempt($credentials)){
            $user = auth()->user();
            if(!empty($user->email_verified_at)){
                return redirect()->route('home');
            }
            auth()->logout();
            $resend_email_link = '<a href="#" wire:click.prevent="resend_email(\''.$user->remember_token.'\', \''.$user->email.'\')." style="color:#a94442"/>Resend</a>';
            session()->flash('error', 'Email not verified yet. Please check your email '.$resend_email_link);
            $this->password = "";
            return;
        }
        session()->flash('error', 'invalid password');
        $this->password = "";
    }

    public function render()
    {
        return view('livewire.login');
    }
}
