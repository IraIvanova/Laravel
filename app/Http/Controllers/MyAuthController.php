<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAuthController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }

    public function authenticate(Request $request){
        $array = $request->all();
        $remember = $request->has('remember');

       if( Auth::attempt([
            'login'=>$array['login'],
            'password'=>$array['password']
        ],$remember)){
           return redirect()->intended();
       }

       return redirect()->back()->withInput($request->only('login','remember'))->withErrors(['login'=>'Data is wrong']);
    }
}
