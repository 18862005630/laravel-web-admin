<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|页面路由
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//后台登录页
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('login');
});

Route::namespace('Admin')->group(function (){
    //后台首页
    Route::get('/','IndexController@index');

});

