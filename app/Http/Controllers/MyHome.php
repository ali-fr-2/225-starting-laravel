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

        // $articles=Articles::updateOrCreate(['id'=>8],[
        //     'title'=>'c++',
        //     'price'=>'50000',
        //     'body'=>'testing'
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

        // $articles = Articles::destroy([3,4,5]);
        // dd($articles);

                                                        //soft-delete

        // $articles=Articles::where('id',7)->delete();
        // dd($articles);

        // $articles=Articles::find(7);
        // dd($articles);

        // $articles=Articles::withTrashed()->find(7);
        // dd($articles);

        // $articles=Articles::onlyTrashed()->get();
        // dd($articles);

        // $articles=Articles::onlyTrashed()->find(7);
        // $articles->restore();
        // dd($articles);

        $articles=Articles::where('id',7)->forceDelete();
        dd($articles);

    }
}
