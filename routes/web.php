<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace'=> 'Home'],function(){
    Route::get('/','IndexController@index'); //首页
    Route::get('/join','IndexController@join'); //加入我们页面
    Route::get('/news','IndexController@news'); //新闻中心首页
    Route::get('/detail','IndexController@deltail'); //新闻中心详情页


});