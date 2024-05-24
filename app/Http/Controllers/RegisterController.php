<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show(){
        return view('register');
    }


    public function store(Request $request){
        $request->validate([
            'username'=>'required',
            'email'=>'required|email',
            'password'=>'required',
        ]);
        $user=User::create([
            'username'=>$request->input('username'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
            'level'=>'admin',
        ]);
        $user->save();
        return redirect()->route('login')->with('success','Berhasil Register');
    }
}
