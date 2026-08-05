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
        // dd($articles);

        // $articles=Articles::all()->where('id','>',6);
        // dd($articles);

        $articles=Articles::all();
        $articles=Articles::withoutGlobalScope('price')->where('id','>',6)->get();
        dd($articles);

    }
}
