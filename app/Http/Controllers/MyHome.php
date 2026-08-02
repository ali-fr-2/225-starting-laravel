<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyHome extends Controller
{
    public function index(){
        return view('index');
    }
}
