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

Route::group([
    'prefix' => 'news',
    'namespace' => 'News',
    'as' => 'news.'
], function () {
    Route::get('/','NewsController@newsAll')->name('all');
    Route::get('/{news}','NewsController@newsOne')->name('one');

});


Route::group([
    'prefix' => 'categories',
    'namespace' => 'News',
    'as' => 'category.'
], function () {
    Route::get('/', 'CategoryController@categories')->name('all');
    Route::get('/{category}', 'CategoryController@category')->name('one');
});


Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.',
    'middleware'=>['auth','isAdmin']
], function () {
    Route::get('/', 'IndexController@index')->name('index');
    Route::group([
        'prefix' => 'news',
        'as' => 'news.'
    ], function () {
        Route::get('/', 'NewsController@list')->name('list');
        Route::match(['get', 'post'], '/create', 'NewsController@create')->name('create');
        Route::get('/edit/{news}', 'NewsController@edit')->name('edit');
        Route::post('/update/{news}', 'NewsController@update')->name('update');
        Route::get('/destroy/{news}', 'NewsController@destroy')->name('destroy');
    });
    Route::group([
        'prefix' => 'category',
        'as' => 'category.'
    ], function () {
        Route::get('/', 'CategoryController@list')->name('list');
        Route::match(['get', 'post'], '/create', 'CategoryController@create')->name('create');
        Route::get('/edit/{category}', 'CategoryController@edit')->name('edit');
        Route::post('/update/{category}', 'CategoryController@update')->name('update');
        Route::get('/destroy/{category}', 'CategoryController@destroy')->name('destroy');
    });
    Route::group([
        'prefix' => 'users',
        'as' => 'users.'
    ], function () {
        Route::get('/', 'UserController@list')->name('list');
        Route::post('/update/{user}', 'UserController@update')->name('update');
        Route::get('/destroy/{user}', 'UserController@destroy')->name('destroy');
    });
});

Route::get( '/feedback/list', 'FeedbackController@list')->name('feedbacklist');
Route::match(['get', 'post'], '/feedback/create', 'FeedbackController@create')->name('feedbackCreate');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
