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

Route::post('/v1/response','ApiController@requesting');
Route::post('/v1/withdraw','ApiController@with');

Route::get('/v1/access','ApiController@access');

Route::post('/v1/request','ApiController@postdatahaha');

Route::get('/v1/cron','ApiController@cron');