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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/help', 'HomeController@help')->name('help');
Route::get('/admin', 'AdminController@admin')->name('admin');
Route::get('/profile', 'HomeController@index')->name('home');
Route::get('/users', 'UserController@users')->middleware('role:admin')->name('users');
Route::get('/users/create', 'UserController@create')->middleware('role:admin')->name('create');
Route::get('/users/edit/{id}', 'UserController@show')->middleware('role:admin')->name('edit');
Route::get('/users/filter', 'UserController@usersFiltered')->middleware('role:admin')->name('usersFiltered');
route::get('/{x}','HomeController@index')->name('home');
