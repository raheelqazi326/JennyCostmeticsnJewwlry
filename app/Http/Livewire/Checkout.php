<?php

namespace App\Http\Livewire;

use Livewire\Component;
use ShoppingCart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\DeliveryDetail;

class Checkout extends Component
{
    public $fullname, $email, $phone, $line1, $line2, $city, $state, $country, $zipcode; 

    protected $rules = [
        "fullname" => "required|max:60",
        "email" => "required|email|max:60",
        "phone" => "required|digits_between:9,11",
        "line1" => "required|max:150",
        "line2" => "required|max:150",
        "city" => "required|max:60",
        "state" => "required|max:60",
        "country" => "required|max:60",
        "zipcode" => "required|max:10",
    ];

    public function mount(){
        $check = auth()->check();
        if(!ShoppingCart::countRows() || !$check){
            return redirect()->route('cart');
        }
        $user = auth()->user();
        $this->fullname = $user->name;
        $this->email = $user->email;
    }

    public function updated($field){
        $this->validateOnly($field);
    }

    public function save(){
        $this->validate();
        $delivery_details = new DeliveryDetail;
        $delivery_details->person_name = $this->fullname;
        $delivery_details->email = $this->email;
        $delivery_details->phone = $this->phone;
        $delivery_details->line_1 = $this->line1;
        $delivery_details->line_2 = $this->line2;
        $delivery_details->country = $this->country;
        $delivery_details->state = $this->state;
        $delivery_details->city = $this->city;
        $delivery_details->zipcode = $this->zipcode;
        $delivery_details->save();

        $order = new Order;
        $order->user_id = auth()->user()->id;
        $order->cost = ShoppingCart::total();
        $order->delivery_detail_id = $delivery_details->id;
        $order->booking_status_id = 1;
        $order->save();

        $items = ShoppingCart::all();
        foreach($items as $item){
            $order_item = new OrderItem;
            $order_item->order_id = $order->id;
            $order_item->product_id = $item->id;
            $order_item->price = $item->price;
            $order_item->quantity = $item->qty;
            $order_item->amount = $item->amount;
            $order_item->save();
        }
        ShoppingCart::clean();
        session()->flash('message', 'Order Successfull');
        return redirect()->route('home');
    }

    public function render()
    {
        $data['items'] = ShoppingCart::all();
        $data['totalPrice'] = ShoppingCart::total();
        return view('livewire.checkout')->with($data);
    }
}
