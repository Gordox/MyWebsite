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

Route::get('/', 'IndexController@index');
Route::get('/hobby-works', 'HobbyWorkController@index');
Route::get('/professional-works', 'ProWorkController@index');
Route::get('/blog', 'BlogWorkController@index');
Route::get('/contact', 'ContactController@index');
