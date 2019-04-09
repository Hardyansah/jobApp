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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('users', 'UsersController');
Route::resource('details', 'DetailsController');
Route::group(['middleware' => ['auth', 'role:admin']],
    function () {
        Route::resource('admin', 'AdminController');
    });
Route::group(['middleware' => ['auth', 'role:user']],
    function () {
        Route::resource('user', 'UsersController');
    });
