<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    
    public function phone(){
        return $this->hasOne(Phone::class, 'id', 'refModule_id')->where('refModule_type', Contact::class);
    }
    
    public function question(){
        return $this->hasOne(Question::class, 'id', 'refModule_id')->where('refModule_type', Question::class);
    }
}
