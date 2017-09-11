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

Route::get('/', function () {
    return view('app');
});

Route::post('/api/login', 'Auth\LoginController@login');
Route::get('/api/auth/user', 'Auth\LoginController@authenticatedUser');
Route::get('/api/user', 'UsersController@index');

Route::post('/api/logout', 'Auth\LoginController@logout');
Route::get('/logout', 'Auth\LoginController@logout');

