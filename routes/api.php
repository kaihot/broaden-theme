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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(["prefix"=>"theme"], function(){
    Route::get("recent", "ThemeController@recent");
    Route::get("popular", "ThemeController@popular");

    Route::post("add", "ThemeController@add");

    Route::post("vote/{id}", "ThemeController@vote")->where("id", "[0-9]+");
    Route::post("/{id}/upload", "ThemeController@upload")->where("id", "[0-9]+");
    Route::get("/{id}", "ThemeController@detail")->where("id", "[0-9]+");
});