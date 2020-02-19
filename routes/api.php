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

Route::get('/commodities', 'CommoditiesController@index')->name('commodity.index');
Route::get('/commodity/{id}', 'CommoditiesController@show')->name('commodity.show');
Route::post('/commodity', 'CommoditiesController@store')->name('commodity.store');
Route::patch('/commodity/{id}', 'CommoditiesController@update')->name('commodity.update');
Route::delete('/commodity/{id}', 'CommoditiesController@destroy')->name('commodity.destroy');
