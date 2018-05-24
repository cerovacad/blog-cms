<?php

use App\Http\Controllers\PostController;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function(){
    //POSTS
    Route::get('/posts', ['uses' => 'PostController@index', 'as' => 'posts.index']);
    Route::get('/posts/create', ['uses' => 'PostController@create', 'as' => 'posts.create']);
    Route::post('/posts/store', ['uses' => 'PostController@store', 'as' => 'posts.store']);
    //CATEGORIES
    Route::get('/categories', ['uses' => 'CategoryController@index', 'as' => 'categories.index']);
    Route::get('/categories/create', ['uses' => 'CategoryController@create', 'as' => 'categories.create']);
    Route::post('/categories/store', ['uses' => 'CategoryController@store', 'as' => 'categories.store']);
    Route::get('/categories/destroy/{id}', 'CategoryController@destroy');
    Route::get('/categories/edit/{id}', 'CategoryController@edit');
    Route::post('/categories/update/{id}', 'CategoryController@update');
});

