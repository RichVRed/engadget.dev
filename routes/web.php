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

Route::get( '/user/forgot', 'Auth\ResetPasswordController@showResetForm');
Route::post('/user/forgot', 'Auth\ResetPasswordController@reset');

Route::get( '/password/email', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');