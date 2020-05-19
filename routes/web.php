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




Route::get('/', [
    'uses' => 'HomeController@index',
    'as' =>  'main'
]);



Route::get('/category/', [
    'uses' => 'NewsController@categoryAll',
    'as'=> 'category'
]);
Route::get('/category/{id}', [
    'uses' => 'NewsController@categoryNews',
    'as'=> 'categoryNews'
]);


Route::get('/news', [
    'uses' => 'NewsController@index',
    'as'=> 'newsAll'
]);
Route::get('/news/{id}', [
    'uses' => 'NewsController@news',
    'as'=> 'newsOne'
]);
Route::get('/admin', [
    'uses' => 'Admin\IndexController@index',
    'as'=> 'admin'
]);
