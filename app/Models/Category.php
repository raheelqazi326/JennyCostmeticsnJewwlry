<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function scopeSearch($query,$value){
        return $query->where('name','like','%'.$value.'%')
        ->Orwhere('main_category','like'.'%'.$value.'%')
        ->Orwhere('status','like','%'.$value.'%');
    }
}
