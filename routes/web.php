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
})->name('welcome');

Auth::routes();

Route::middleware("auth")->namespace("Doctor")->name('doctor.')->prefix('doctor')
    ->group(function () {
        Route::get("/", "UserController@index")->name("index");
        Route::get("/profile", "UserController@show")->name("show");
        Route::get("/edit", "UserController@edit")->name("edit");
        Route::put("/update", "UserController@update")->name("update");
        Route::delete("/destroy", "UserController@destroy")->name("destroy");


        Route::get("/messages", "MessageController@index")->name("messages.index");
        Route::get("/reviews", "ReviewsController@index")->name("reviews.index");
        Route::get("/stats", "StatsController@index")->name("stats.index");
    });

Route::get('{any}', function () {
    return view('welcome');
})->where('any', '.*');
