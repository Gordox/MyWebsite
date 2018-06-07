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

Route::get('/hobby-works',           'HobbyWorkController@index');
Route::get('/hobby-works/show/{id}', 'HobbyWorkController@show');

Route::get('/professional-works',           'ProWorkController@index');
Route::get('/professional-works/show/{id}', 'HobbyWorkController@show');

Route::get('/blog',    'BlogWorkController@index');
Route::get('/resume',  'ResumeController@index');
Route::get('/contact', 'ContactController@index');

//-------------------- Bridge of admin --------------------\\

//Admin right to these
//Hobby work
Route::get('/hobby-works/create',    'HobbyWorkController@create');
Route::get('/hobby-works/edit/{id}', 'HobbyWorkController@edit');
Route::post('/hobby-works',          'HobbyWorkController@store');
Route::put('/hobby-works/{id}',      'HobbyWorkController@update');
Route::delete('/hobby-works/{id}',   'HobbyWorkController@destroy');

//Professional work
Route::get('/professional-works/create',    'ProWorkController@create');
Route::get('/professional-works/edit/{id}', 'ProWorkController@edit');
Route::post('/professional-works',          'ProWorkController@store');
Route::put('/professional-works/{id}',      'ProWorkController@update');
Route::delete('/professional-works/{id}',   'ProWorkController@destroy');

//Blog
Route::get('/blog/create', 'BlogWorkController@create');
Route::post('/blog', 'BlogWorkController@store');

//Contact
Route::get('/contact/edit/me', 'ContactController@edit');
Route::put('/contact/edit/me', 'ContactController@update');
