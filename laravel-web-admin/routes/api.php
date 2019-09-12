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

Route::prefix('admin')->group(function (){

    //Admin文件夹下的控制器路由
    Route::namespace('Admin')->group(function () {
        Route::get('/role/add',"AdminController@addRole");

        Route::get('/user/login',"UserController@login");
    });




});

