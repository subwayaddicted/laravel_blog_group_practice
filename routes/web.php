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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostsController');

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/create', 'CategoryController@create');
Route::post('/categories', 'CategoryController@store');
Route::get('/{category_slug}', 'CategoryController@getPostsByCategory');
Route::get('/categories/{category_slug}/edit', 'CategoryController@edit');
Route::patch('/categories/{category_slug}', 'CategoryController@update');
Route::delete('/categories/{category_slug}', 'CategoryController@destroy');