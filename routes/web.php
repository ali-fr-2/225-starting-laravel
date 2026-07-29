<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main', function () {
    return view('main', ['users' => [1, 2, 3]]);
});
