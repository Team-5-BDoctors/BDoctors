<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware("auth")->namespace("Doctor")->name('doctor.')->prefix('doctor')
->group(function(){
    Route::get("/","UserController@index")->name("index");
    Route::get("/{id}","UserController@show")->name("show");
    Route::get("/edit/{id}","UserController@edit")->name("edit");
    Route::put("/update/{id}","UserController@update")->name("update");
});
