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
Route::get('/article','\App\Http\Controllers\ArticleController@index');
Route::get('/article/{articleList}','\App\Http\Controllers\ArticleController@show');
Route::get('/article/edit/{articleList}','\App\Http\Controllers\ArticleController@edit');
Route::post('/article/image/upload', '\App\Http\Controllers\ArticleController@imageUpload');
//Route::post('/article','\App\Http\Controllers\PostController@restore');
Route::put('/article/update/{articleList}','\App\Http\Controllers\ArticleController@update');
Route::get('/article/delete/{articleList}','\App\Http\Controllers\ArticleController@delete');

