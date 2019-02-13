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

Route::get('/', 'MainController@index')->name('home');
Route::get('/about', function () {
    return view('about');
});

Auth::routes();
Route::get('contact','ContactController@index')->name('contact');
Route::post('contact','ContactController@store');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts','PostsController');

Route::resource('categories', 'CategoryController');

