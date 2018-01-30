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

Route::get('/', 'web\AppController@getApp')->middleware('auth');
//Auth routes
Route::get('/login', 'web\AppController@getLogin')->name('login')->middleware('guest');
Route::get('/login/{social}', 'web\AuthenticationController@getSocialRedirect')->middleware('guest');
Route::get('/login/{social}/callback', 'web\AuthenticationController@getSocialCallback')->middleware('guest');