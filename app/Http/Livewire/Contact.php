<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact AS ContactModel;
use App\Models\Phone;
use App\Models\Question;
use Mail;

class Contact extends Component
{
    public $fullname, $company, $email, $phone, $message;
    protected $rules = [
        "fullname" => "required|max:40",
        "email" => "required|email|max:40",
        "phone" => "required|numeric|digits_between:9,11",
        "message" => "required"
    ];

    public function updated($field){
        $this->validateOnly($field);
    }
    
    public function save(){
        $this->validate();
        $contact = new ContactModel;
        $contact->fullname = $this->fullname;
        $contact->company = $this->fullname;
        $contact->email = $this->email;
        $contact->save();
        
        $phone = new Phone;
        $phone->refModule_type = get_class($contact);
        $phone->refModule_id = $contact->id;
        $phone->number = $this->phone;
        $phone->save();

        $question = new Question;
        $user = auth()->user();
        if(isset($user->id)){
            $question->user_id = $user->id;
        }
        $question->refModule_type = get_class($contact);
        $question->refModule_id = $contact->id;
        $question->question = $this->message;
        $question->save();
        $data = [
            'contact' => $contact,
            'phone' => $phone,
            'question' => $question
        ];

        Mail::send('mail.contact', $data, function ($message) use ($data) {
            $message->sender('emailforhnh@gmail.com', 'JennyShop');
            $message->to('admin@jennyShop.com', 'JennyShop');
            $message->subject('Contact');
        });
        session()->flash('message', 'Your Message has been received. You will get reply soon');
        return redirect()->route('contact');
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
