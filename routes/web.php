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

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::get( '/user/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/user/register', 'Auth\RegisterController@postUserRegister');

Route::get( '/user/login',  'Auth\LoginController@showLoginForm');
Route::post('/user/login',  'Auth\LoginController@login');
Route::post('/user/logout', 'Auth\LoginController@logout');

Route::get( '/user/forgot', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('/user/forgot', 'Auth\ForgotPasswordController@sendResetLinkEmail');

Route::get( '/user/reset-pass', 'Auth\ResetPasswordController@showResetForm');
Route::post('/user/reset-pass', 'Auth\ResetPasswordController@reset');

auth/engadget_auth/sendPasswordReset

Auth::routes();
Route::resource('admin/users', 'Admin\UsersController');
Auth::routes();