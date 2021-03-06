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

Route::redirect('/', '/hamburgers');
Route::get(   '/hamburgers', 'hamburgerController@index')->middleware('auth');
Route::get(   '/hamburgers/create', 'hamburgerController@create')->name('hamburgers.create');
Route::post(  '/hamburgers', 'hamburgerController@store');
Route::get(   '/hamburgers/{id}','hamburgerController@show')->name('hamburger.show');
Route::get(   '/hamburgers/{id}/edit','hamburgerController@edit');
Route::put(   '/hamburgers/{id}','hamburgerController@update');
Route::delete('/hamburgers/{id}','hamburgerController@destroy');
Route::post(  '/hamburgers/{id}/likes', 'hamburgerController@like');
Route::post(  '/hamburgers/{id}/likes/{like}', 'hamburgerController@unlike');
Route::get(  '/hamburgers/{id}/likes/{like}', 'hamburgerController@unlike');


Auth::routes();





