<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\CategoryController;


Route::get('/', function () {
    return view('welcome');
    // return view('layouts.master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/categories',CategoryController::class);
Route::resource('/products',ProductController::class);