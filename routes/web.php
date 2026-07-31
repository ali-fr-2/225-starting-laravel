<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('courses/{course?}/{id?}', function ($course = "python", $id = 1) {
    // return view('course');
    return $course . " " . $id;
})->name('course');
