<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myControllers\FirstProjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/laravel')->controller(FirstProjectController::class)->group(function(){
    Route::get('/test1/{name}','test1');
    Route::get('/test2/{name?}', 'test2');
    Route::get('/hi/{index?}', 'hi');
});
