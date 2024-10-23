<?php

use App\Http\Controllers\EmpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[EmpController::class,'loginUser'])->name('login.loginUser');


Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup',[EmpController::class,'signupUser'])->name('signup.signupUser');