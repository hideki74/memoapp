<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;

Route::get('/welcome', function() {
    return view('welcome');
});

Route::get('/', [MemoController::class, 'index']);
Route::resource('/memo', MemoController::class);
Route::get('/people', [MemoController::class, 'people']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');