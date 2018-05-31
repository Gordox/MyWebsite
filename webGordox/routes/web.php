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

//Basic access
Route::get('/', 'IndexController@index');

Route::get('/hobby-works', 'HobbyWorkController@index');
Route::get('/hobby-works/show/{id}', 'HobbyWorkController@show');

Route::get('/professional-works', 'ProWorkController@index');
Route::get('/blog', 'BlogWorkController@index');
Route::get('/resume', 'ResumeController@index');
Route::get('/contact', 'ContactController@index');

//-------------------- Bridge of admin --------------------\\

//Admin right to these
Route::get('/hobby-works/create', 'HobbyWorkController@create');
Route::get('/hobby-works/edit/{id}', 'HobbyWorkController@edit');
Route::post('/hobby-works', 'HobbyWorkController@store');

Route::get('/professional-works/create', 'ProWorkController@create');
Route::post('/professional-works', 'ProWorkController@store');

Route::get('/blog/create', 'BlogWorkController@create');
Route::post('/blog', 'BlogWorkController@store');
