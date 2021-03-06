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
Route::group(['prefix' => '/v1'], function () {
    Route::resource('/region', 'RegionsController');
    Route::resource('/district', 'DistrictController');
});
//Route::resource('/region', 'RegionsController');