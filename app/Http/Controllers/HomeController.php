<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $user=User::find(1);
        $courses=$user->courses;

        return view('welcome',compact('courses'));

    }
}
