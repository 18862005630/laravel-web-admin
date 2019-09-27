<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|接口路由
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
        Route::get('/user/register',"UserController@register");
        Route::get('/user/login',"UserController@login");

        //需要token验证的路由
        Route::group(['middleware'=>'jwt.auth'],function (){
            Route::get('/user/logout',"UserController@logout");
        });



    });

    //API路由
    Route::namespace('Api')->group(function () {
        Route::get('/index/index',"IndexController@index");


        Route::post('/index/site/modify',"IndexController@modifySite");
    });




});

