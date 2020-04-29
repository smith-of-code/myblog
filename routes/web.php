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

//a. Страницу приветствия пользователей.
//b. Страницу с информацией о проекте.
//c. Страницу для вывода одной и нескольких новостей.

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/', function () {
    return view('hello');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    return view('news');
});
