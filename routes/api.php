<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth')->get('/doctor', function (Request $request) {
    return $request->user();
});

Route::get('/doctor/stats/messages', 'Api\StatsController@index');
Route::get('/doctor/stats/reviews', 'Api\StatsController@reviewsStats');
Route::get('/specializations', 'Api\SpecializationController@index');
Route::get('/doctors', 'Api\UserController@index');
Route::get('/doctor/{doctor}', 'Api\UserController@show');


Route::get('/sponsored-doctors', 'Api\UserController@showDoctorsSponsored');
Route::post('/contacts', 'Api\ContactController@store');
Route::post('/reviews', 'Api\ReviewsController@store');

