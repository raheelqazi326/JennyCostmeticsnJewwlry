<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Mail;
use Str;
class Register extends Component
{
    public $fullname, $email, $password, $confirm_password, $notify;
    
    protected $rules = [
        "fullname" => 'required|max:40',
        "email" => 'required|email|max:40|unique:users',
        "password" => 'required|max:40',
        "confirm_password" => 'same:password'
    ];

    public function mount(){
        $this->notify = true;
    }

    public function updated($field){
        $this->validateOnly($field);
    }

    public function save(){
        $this->validate();
        $code = (string) Str::uuid();
        $user = new User;
        $user->role_id = 2;
        $user->name = $this->fullname;
        $user->email = $this->email;
        $user->password = bcrypt($this->password);
        $user->remember_token = $code;
        $user->save();
        $data = [
            "name" => $this->fullname,
            "code" => $code,
            "email" => $this->email
        ];
        Mail::send('mail.verification', $data, function ($message) use ($data) {
            $message->sender('emailforhnh@gmail.com', 'JennyShop');
            $message->to($data['email'], $data['name']);
            $message->subject('Verification');
        });
        session()->flash('message', 'Verification link has been sent');
        return redirect()->route('login');
    }
    
    public function render()
    {
        return view('livewire.register');
    }
}
