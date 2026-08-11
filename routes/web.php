<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyHome;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

// Route::get('/',[MyHome::class,'index']);

Route::get('/login',[HomeController::class,'login'])->name('NameLogin');
Route::post('/form',[HomeController::class,'form'])->name('NameForm');



