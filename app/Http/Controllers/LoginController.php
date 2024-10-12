<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function LoginCheck(Request $req){
        dd($req->email,
                 $req->password,
          );
    }

    public function home(){
        return view('HomePage');
    }
}
