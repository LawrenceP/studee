<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/commodities', 'CommoditiesController@index');
Route::get('/commodity/{id}', 'CommoditiesController@show');
Route::post('/commodity', 'CommoditiesController@store');
Route::patch('/commodity/{id}', 'CommoditiesController@update');
Route::delete('/commodity/{id}', 'CommoditiesController@destroy');
