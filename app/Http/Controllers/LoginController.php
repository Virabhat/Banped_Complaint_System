<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function LoginCheck(Request $req){
       $req->validate([
            'email' => 'required|email',
            'password' => 'required',
       ],[
              'email.required' => 'Email is required',
              'email.email' => 'Email is not valid',
              'password.required' => 'Password is required',
       ]);

       $user = User::where('email',$req->email)->first();
        

       

    }

    public function home(){
        return view('HomePage');
    }
}
