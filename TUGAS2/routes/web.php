<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Control1;
use App\Http\Controllers\control2;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/", [control1::class, 'home']);
Route::get("/about", [control1::class,'about']);
Route::get("services",[control1::class,'services']);
Route::get("/contact", [control2::class,'contack']);
Route::get("/gallery", [control2::class,'portfolio']);
Route::get("/blog",[control2::class,'blog']);