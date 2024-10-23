<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/news',[NewsController::class,'showNews']);

Route::get('/news/{category}',[NewsController::class,'showNewsByCtg']);

Route::get('/news/{category}/{id}',[NewsController::class,'showNewsByCtgAndId']);


Route::get('/username', [UserController::class, 'showForm'])->name('show.form');
Route::post('/username', [UserController::class, 'storeUsername'])->name('store.username');
Route::post('/clear-username', [UserController::class, 'clearUsername'])->name('clear.username');

Route::get('/display_username', [UserController::class, 'displayUsername'])->name('display.username');