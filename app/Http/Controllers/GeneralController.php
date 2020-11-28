<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class GeneralController extends Controller
{
    //
    public function verify($email, $code){
        $user = User::where("email", $email)->first();
        if(!empty($user)){
            if($user->remember_token == $code){
                $user->remember_token = null;
                $user->status = 'active';
                $user->email_verified_at = date('Y-m-d h:i:s');
                $user->save();
                session()->flash('message', 'You account has been verified. You can login now');
                return redirect()->route('login');
            }
            session()->flash('error', 'Link Expired');
            return redirect()->route('login');
        }
        session()->flash('error', 'User not found');
        return redirect()->route('login');
    }        
}
