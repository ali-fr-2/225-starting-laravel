<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Articles;
class MyHome extends Controller
{
    public function index(){

        $articles=Articles::all();
        dd($articles);

        return view('index');

    }
}
