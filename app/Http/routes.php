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


// 首页
Route::get('/', 'HomeController@index');
// 详情页面
Route::get('/post/{id}', 'PostController@index');
// 关于
Route::get('/about', 'AboutController@index');
// 搜索页面
Route::get('/search', 'PostController@search');
// 分类查看页面
Route::get('/category/{id}', 'PostController@category');
// 归档查看
Route::get('/archive/{time}', 'PostController@archive');
// TAG查看
Route::get('/tag/{tag}', 'PostController@tag');


// 测试用的控制器
Route::get('/test', 'TestController@index');