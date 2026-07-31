<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('courses/{course?}/{id?}', function ($course="python",$id=1) {
    return $course." ".$id;
});
