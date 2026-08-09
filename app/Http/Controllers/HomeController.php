<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(){
        return view('login');
    }

    public function form(Request $request){
        // dd($request->all());

        // dd($request->file());

        // dd($request->file('file2'));

        // dd($request->hasfile('file2'));

        // dd($request->file1->path());

        dd($request->file1->getClientOriginalName());








        // dd($request->name);
        // dd($request->email);
        // dd($request->has('name'));
        // dd($request->only('_token'));
        // dd($request->except('name'));





    }
}
