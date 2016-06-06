<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','EasyController@index');
Route::get('post/{id}', 'PostController@post');
Route::auth();

Route::group(['middleware'=>'auth'], function () {
    Route::get('add','PostController@index');
    Route::post('add','PostController@add');
    Route::post('post/addImage','PostController@jxPhoto');
    Route::get('addChannel', 'ChannelController@index');
    Route::post('addChannel', 'ChannelController@addChannel');
});

Route::get('addContact', 'ContactController@index');
Route::post('addContact', 'ContactController@addContact');
Route::get('addCharts', 'ChartsController@index');
Route::post('addCharts', 'ChartsController@addCharts');
