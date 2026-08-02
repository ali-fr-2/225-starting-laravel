<?php

use App\Http\Controllers\MyHome;
use Illuminate\Support\Facades\Route;


Route::get('/',[MyHome::class,'index']);


// Route::get('/', function () {
//     return view('index');
// })->name('index');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('coursepanel/{course?}/{id?}', function ($course = "python", $id = 1) {
    // return view('course');
    return $course . " " . $id;
})->name('course');
Route::prefix('course')->group(function () {
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/php', function () {
        return 'php';
    });
    Route::get('/python', function () {
        return 'python';
    });
});
