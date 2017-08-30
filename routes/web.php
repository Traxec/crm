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
|==========================================================================
| Home Routes start
|==========================================================================
*/
Route::get('/','Home\StaticPagesController@index')->name('index');

//----------------------------会话控制开始----------------------------------\
Route::get('login','Home\SessionsController@create')->name('login');
Route::post('login','Home\SessionsController@store')->name('login');
Route::delete('logout','Home\SessionsController@destroy')->name('logout');
//----------------------------会话控制结束----------------------------------\

//----------------------------账户信息开始----------------------------------\
Route::get('users/{user}/edit','Home\UsersController@edit')->name('users.edit');
Route::get('users/{user}/password_edit','Home\UsersController@password_edit')->name('users.password_edit');
//----------------------------账户信息结束----------------------------------\

//----------------------------个人资料开始----------------------------------\
Route::get('persons/{user}/person_edit','Home\PersonsController@person_edit')->name('persons.person_edit');
Route::get('persons/{user}/address_edit','Home\PersonsController@address_edit')->name('persons.address_edit');
Route::get('persons/{user}/bank_edit','Home\PersonsController@bank_edit')->name('persons.bank_edit');
//----------------------------个人资料结束----------------------------------\


/*
|==========================================================================
| Admin Routes start
|==========================================================================
*/
Route::get('/admin','Admin\StaticPagesController@index')->name('admin.index');

Route::get('admin/login','Admin\SessionsController@create')->name('admin.login');
Route::post('admin/login','Admin\SessionsController@store')->name('admin.login');
Route::delete('admin/logout','Admin\SessionsController@destroy')->name('admin.logout');
