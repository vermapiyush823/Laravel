<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/add-car', [CarController::class, 'index']);

Route::post('/car', [CarController::class, 'store'])->name('store');

Route::get('/car/{id}', [CarController::class, 'show']);

Route::get('/car/{id}/edit', [CarController::class, 'edit'])->name('edit');

Route::put('/car/{id}/edit', [CarController::class, 'update'])->name('update');
