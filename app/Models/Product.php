<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    public function scopeSearch($query,$value){
        return $query->with('category', 'sizes', 'images')
        ->Where('name','like','%'.$value.'%')
        ->orWhereHas('category', function($q) use ($value) {
            $q->where('name','like'.'%'.$value.'%')
            ->Orwhere('main_category','like'.'%'.$value.'%');
        })
        ->orWhereHas('sizes', function($q) use ($value) {
            $q->where('key', 'size')->where('value','like'.'%'.$value.'%');
        })
        ->orWhere('name','like'.'%'.$value.'%')
        ->orWhere('manufacturer','like'.'%'.$value.'%')
        ->orWhere('stock','like'.'%'.$value.'%')
        ->orWhere('stock','like'.'%'.$value.'%')
        ->orWhere('stock','like'.'%'.$value.'%')
        ->orWhere('status','like','%'.$value.'%');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function sizes(){
        return $this->hasMany(ProductAttribute::class, 'product_id', 'id');
    }

    public function images(){
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
}
