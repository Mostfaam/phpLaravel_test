<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class login extends Controller{

    function showLogin(){
        return view("admin.login");
    }

    function register (Request $request){

         User::create([
             "name"=>"m",
             "email"=>"mmm@mm.m",
             "password"=>Hash::make("123"),
             "age"=>6,
             "country"=>"hh",
             "degree"=>"hh"


         ]);
    }
    function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(auth()->attempt($request->only("email","password"))){
           return redirect()->route('admin.home');

        }
        return redirect()->back()->with('error', 'email or  password    incorrect')->withInput();
    }
}
