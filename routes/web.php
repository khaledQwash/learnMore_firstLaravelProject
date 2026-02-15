<?php

use App\Http\Controllers\myControllers\LandingPageController;
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
Route::prefix('/landingPage')->controller(LandingPageController::class)->group(function(){
    Route::get('/master', 'master');
    Route::get('/about', 'about')->name('aboutPage');
    Route::get('/features', 'features')->name('featuresPage');
    Route::get('/services', 'services')->name('servicesPage');
    Route::get('/portfolio', 'portfolio')->name('portfolioPage');
    Route::get('/contact', 'contact')->name('contactPage');
});
