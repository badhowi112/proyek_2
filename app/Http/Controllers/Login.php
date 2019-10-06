<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class Login extends Controller
{
    //
     public function index(){
        return view('login.index');
    }
    public function postlogin(Request $request){
       //dd($request->all());
       if(Auth::attempt($request->only('email','password'))){
           return redirect('/dashboard');
       }else{
            return redirect('/login')->with('Failed','Email atau Password Salah ');
       }
       return view('auths.login');
    }
     public function logout(){
        Auth::logout();
        return redirect('/login')->with('Logout','Berhasil Logout');
    }
}
