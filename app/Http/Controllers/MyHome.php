<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Articles;

class MyHome extends Controller
{
    public function index()
    {
        //insert

        // $articles= new Articles();
        // $articles->title="php";
        // $articles->price="450000";
        // $articles->body="this is for test";
        // $articles->save();
        // dd($articles);

        //update

        // $articles=Articles::find(3)->update([
        //       'title'=>'python',
        //       'price'=>'500000',
        //       'body'=>'update testing'
        // ]);
        // dd($articles);

        // $articles = Articles::find(3);
        // $articles->update([
        //     'title' => 'python',
        //     'price' => '5000000',
        //     'body' => 'update testing'
        // ]);
        // dd($articles);

        // $articles=Articles::updateOrCreate(['id'=>6],[
        //     'title'=>'jsjs',
        //     'price'=>'850000',
        //     'body'=>'js testing'
        // ]);
        // dd($articles);

        // delete

        // $articles=Articles::where('id',1)->delete();
        // dd($articles);

        // $articles=Articles::find(2)->delete();
        // dd($articles);

        // $articles = Articles::find(2);
        // $articles->delete();
        // dd($articles);

        // $articles=Articles::destroy(3);
        // dd($articles);

        $articles = Articles::destroy([3,4,5]);
        dd($articles);
    }
}
