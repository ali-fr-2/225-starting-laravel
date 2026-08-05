<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Articles;

class MyHome extends Controller
{
    public function index()
    {
        $articles= new Articles();
        $articles->title="php";
        $articles->price="450000";
        $articles->body="this is for test";
        $articles->save();
        dd($articles);
    }
}
