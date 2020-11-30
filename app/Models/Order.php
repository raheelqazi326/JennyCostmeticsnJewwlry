<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function scopeSearch($query,$value){
        return $query->with('delivery_detail', 'items.product', 'status', 'user')
        ->Where('cost','like','%'.$value.'%')
        ->orWhereHas('delivery_detail', function($q) use ($value) {
            $q->where('cost','like', '%'.$value.'%');
        })
        ->orWhereHas('status', function($q) use ($value) {
            $q->where('status','like', '%'.$value.'%')
            ->orWhere('message','like', '%'.$value.'%');
        })
        ->orWhereHas('user', function($q) use ($value) {
            $q->where('name','like', '%'.$value.'%')
            ->orWhere('email','like', '%'.$value.'%')
            ->orWhere('status','like', '%'.$value.'%');
        })
        ->orWhereHas('items.product', function($q) use ($value) {
            $q->where('manufacturer','like', '%'.$value.'%')
            ->orWhere('name','like', '%'.$value.'%')
            ->orWhere('description','like', '%'.$value.'%')
            ->orWhere('stock','like', '%'.$value.'%')
            ->orWhere('price','like', '%'.$value.'%')
            ->orWhere('status','like', '%'.$value.'%');
        });
    }

    public function delivery_detail(){
        return $this->hasOne(DeliveryDetail::class, 'id', 'delivery_detail_id');
    }

    public function items(){
        return $this->belongsTo(OrderItem::class, 'id', 'order_id');
    }
    
    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function status(){
        return $this->hasOne(OrderStatus::class, 'id', 'booking_status_id');
    }
}
