<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\tag;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // $products=product::find(2);
        // $tags=$products->tags;

        // return view('welcome',compact('tags'));


        $tags=tag::find(2);
        $producuts=$tags->products;

        return view('welcome',compact('producuts'));

    }
}
