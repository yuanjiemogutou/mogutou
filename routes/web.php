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

Route::get('/', function () {
    return view('welcome');
});
// 文章列表
Route::get('/posts', 'PostController@index');
// 文章详情
Route::get('/posts/{post}', 'PostController@show');
// 创建文章
Route::get('/posts/create','PostController@create');
Route::post('/posts/store','PostController@store');
// 编辑文章
Route::get('/posts/{post}/edit','PostController@edit');
Route::put('/posts/{post}','PostController@update');
// 删除文章
Route::get('/posts/delete','PostController@delete');