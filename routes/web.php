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

Route::get('/', 'MainController@index');
Route::get('/hotels', 'MainController@hotels');
Route::get('/monuments', 'MainController@monuments');
Route::get('/news', 'MainController@news')->name('news');
Route::get('/news', 'MainController@newsView')->name('news.view');
Route::get('/item', 'MainController@item');
