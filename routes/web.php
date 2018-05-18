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

Route::pattern('type', 'couche|host');

Route::post('/form/processor', 'HomeController@processor')->name('processor');
Route::get('/', 'HomeController@index');
Route::any('application/{type}', 'HomeController@application')->name('application');