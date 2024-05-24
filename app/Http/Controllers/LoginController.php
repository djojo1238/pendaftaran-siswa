<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        return view('login');
    }
    public function store(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if(Auth::attempt($request->only('email','password'))){
            return redirect()->route('home');
        }
        return redirect()->back()->with('error','Email atau password salah');
    }

}
