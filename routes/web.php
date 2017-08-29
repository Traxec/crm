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

// Route::get('/', function () {
//     return view('welcome');
// });

/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
*/
Route::get('/','Home\StaticPagesController@index')->name('index');

Route::get('login','Home\SessionsController@create')->name('login');
Route::post('login','Home\SessionsController@store')->name('login');
Route::delete('logout','Home\SessionsController@destroy')->name('logout');



/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin','Admin\StaticPagesController@index')->name('admin.index');
