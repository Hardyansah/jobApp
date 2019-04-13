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

Route::get('/', function () {return view('auth.register');});
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'role:admin']],
    function () {
        Route::resource('admin', 'AdminController');
        Route::resource('cv', 'CvController');
    });
Route::resource('details', 'DetailsController');
Route::get('users/{users}', 'UsersController@index')->name('users');
Route::post('users', 'UsersController@store')->name('users.store');
Route::post('users/{users}/edit', 'UsersController@update')->name('users.update');
Auth::routes();
