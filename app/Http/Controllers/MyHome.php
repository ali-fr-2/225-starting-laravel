<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Articles;

class MyHome extends Controller
{
    public function index()
    {

        // $articles=Articles::all();
        // return view('index',compact('articles'));

        // $articles=Articles::find(1);
        // dd($articles);

        // $articles=Articles::find([1,2]);
        // dd($articles);

        // $articles=Articles::find([1,2,3]);
        // dd($articles);

        // $articles = Articles::findOrFail([1, 2]);   // IF dosent exist it returns the page 404/not found
        // dd($articles);

        // $articles=Articles::where('id',2)->get();
        // $articles=Articles::where('id',"<",2)->get();
        // dd($articles);

        $articles = Articles::orderBy('id')->get();
        dd($articles);
    }
}
