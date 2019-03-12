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

//Route::get('/', function () {
//    return view('welcome');
//});

route::get('/','publicController@index')->name('index');
route::get('/about','publicController@about')->name('about');
route::get('/news','publicController@news')->name('news');
route::get('/news/{id}','publicController@newSingle')->name('news_single');
