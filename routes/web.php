<?php

use App\Http\Controllers\Client\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('')->name('client.')->group(function(){
    Route::get('/', [HomeController::class,'index'])->name('index');
});



Route::prefix('/adminpanel')->group(function(){
    Route::get('/', function(){
        return view('admin.home');
    });
});