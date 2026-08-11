<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyHome;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/',[HomeController::class,'index']);




