<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
//        dd(auth()->id());
        return view('auth.login');
    }

    public function loginSubmit(Request $request){
        $remember = $request->has('remember_me');
        if(auth()->attempt(['email' => $request->email, 'password' => $request->password], $remember)){
            return redirect()->route('admin.home');
        }
        return redirect()->route('login');
    }
}
