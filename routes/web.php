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

//todo 21
Route::get('/post/create', 'PostController@create')->name('post.create');

//todo 22 test browser dan buat view baru dalam folder post

//todo 31
Route::post('/post/create', 'PostController@store')->name('post.store');

