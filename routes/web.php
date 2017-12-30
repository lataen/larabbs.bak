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

Route::get('/', 'PagesController@root')->name('root');


// Auth::routes();  相当于下面 权限、注册、忘记密码、 这些路由的总合

// 权限路由 ...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// 注册路由...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// 忘记密码路由...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');



Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);

//  users指定资源路由相当于下面的路由
//  Route::get('/users/{user}', 'UsersController@show')->name('users.show');
//  Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
//  Route::patch('/users/{user}', 'UsersController@update')->name('users.update');