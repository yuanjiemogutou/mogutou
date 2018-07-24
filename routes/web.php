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
Route::get('/posts', '\app\Http\Controllers\PostController@index');
// 文章详情
Route::get('/posts/{post}', '\app\Http\Controllers\PostController@show');
// 创建文章
Route::get('/posts/create','\app\Http\Controllers\PostController@create');
Route::post('/posts/store','\app\Http\Controllers\PostController@store');
// 编辑文章
Route::get('/posts/{post}/edit','\app\Http\Controllers\PostController@edit');
Route::put('/posts/{post}','\app\Http\Controllers\PostController@update');
// 删除文章
Route::get('/posts/delete','\app\Http\Controllers\PostController@delete');