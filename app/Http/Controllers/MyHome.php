<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyHome extends Controller
{
    public function index(){
        // $courses=DB::table('courses')->toSql();
        // dd($courses);

        // $courses=DB::table('courses')->get();

        // $courses=DB::table('courses')->where('id',2)->get();

        $courses=DB::table('courses')->where('id','<',2)->get();
        return view('index',compact('courses'));
    }
}
