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
Route::get('/users/edit/{id}', 'UserController@show')->name('usersEdit');
Route::post('/users/edit/{id}', 'UserController@save')->name('usersSave');
Route::get('/users', 'UserController@users')->name('users');

Route::get('/{x}','HomeController@index')->name('home');
