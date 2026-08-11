<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login(){
        return view('login');
    }

    public function form(Request $request){

        dd($request->file1->getClientOriginalName());

    }
}
