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

Route::get('/', function () {return view('users.detail');});
Auth::routes();
Route::get('welcome', 'StaticsController@welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');
