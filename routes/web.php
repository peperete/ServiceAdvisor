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
Route::get('/userRegister', 'HomeController@userRegister')->name('userRegister');
Route::get('/help', 'HomeController@help')->name('help');
// Route::get('/profile', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@perfilEdit')->name('perfilEdit');
Route::post('/profile/store', 'UserController@store')->name('userStore');


Route::get('/users', 'UserController@users')->middleware('role:admin')->name('users');
Route::get('/users/filter', 'UserController@usersFiltered')->middleware('role:admin')->name('usersFiltered');
Route::post('/users/edit/{id}', 'UserController@save')->name('usersSave');
Route::get('/users/edit/{id}', 'UserController@show')->middleware('role:admin')->name('edit');

Route::get('/categories/filter', 'CategoryController@categoriesFiltered')->name('categoriesFiltered');
Route::resource('/categories', 'CategoryController');

Route::get('/services/filter', 'ServiceController@servicesFiltered')->name('servicesFiltered');
Route::resource('/services', 'ServiceController');

Route::resource('/professionalProfile', 'ProfessionalProfileController');

Route::resource('/professionalprofileCategories', 'ProfessionalprofileCategoryController');

Route::get('/{x}','HomeController@index')->name('home');
