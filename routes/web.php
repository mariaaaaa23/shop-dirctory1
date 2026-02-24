<?php

use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('')->name('client.')->group(function(){
    Route::get('/', [HomeController::class,'index'])->name('index');
});



Route::prefix('/adminpanel')->group(function(){
    Route::get('/', function(){
        return view('admin.home');
    });

    Route::resource('/categories', categoryController::class);
});