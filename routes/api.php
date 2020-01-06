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

//
//Route::middleware('client')->group(function (){
//    Route::resource('usersapi', 'UsersApiController');
//});
//
//Route::middleware('auth:api')->group(function (){
//});
//
//Route::get("/user", function (Request $request){
//    return $request->user();
//})->middleware("auth:api");


Route::post('login', 'UsersApiController@login');
Route::post('register', 'UsersApiController@register');


Route::middleware('auth:api')->group(function () {
    Route::get('user', 'UsersApiController@details');
});
