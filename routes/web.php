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
Route::get('/hotels', 'MainController@hotels')->name('hotels');
Route::get('/hotels/{id}', 'MainController@hotelView')->name('hotel.view');
Route::get('/monuments', 'MainController@monuments')->name('monuments');
Route::get('/monuments/view/{id}', 'MainController@monumentsView')->name('monument.view');
Route::get('/news', 'MainController@news')->name('news');
Route::get('/news/{id}', 'MainController@newsView')->name('news.view');
Route::get('/item', 'MainController@item');
