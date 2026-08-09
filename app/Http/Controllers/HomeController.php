<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(){
        return view('login');
    }

    public function form(Request $request){
        // dd($request->name);
        // dd($request->all());
        // dd($request->email);
        // dd($request->has('name'));
        // dd($request->only('_token'));
        dd($request->except('name'));





    }
}
