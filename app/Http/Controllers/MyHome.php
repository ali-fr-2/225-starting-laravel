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

        // $courses=DB::table('courses')->where('id','<',2)->get();
        // return view('index',compact('courses'));



        // $courses=DB::table('courses')->insert([
        //     ['title'=>'react','body'=>'test','user_name'=>'ali'],
        //     ['title'=>'next.js','body'=>'test2','user_name'=>'reza']
        // ]);

        // $courses=DB::table('courses')->where('id',5)->update(['user_name'=>'asghar']);

        // $courses=DB::table('courses')->where('id',5)->delete();

        // $courses=DB::table('courses')->delete();




        // if we use delete and again insert data the id will start from the last item that we have from before deleting but if we use truncate() it will start over from id 1



        // $courses=DB::table('courses')->truncate();

        // dd($courses);
        return view('index');

    }
}
