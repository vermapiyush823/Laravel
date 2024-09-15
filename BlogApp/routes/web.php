<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowBlog;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/blog',[ShowBlog::class,'getBlog']);

Route::get('about/{name?}',[ShowBlog::class,'showUser']);