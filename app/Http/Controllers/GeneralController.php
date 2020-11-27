<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class GeneralController extends Controller
{
    //
    public function verify($email, $code){
        dd([$email, $code]);
    }        
}
