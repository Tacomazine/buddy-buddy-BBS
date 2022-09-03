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

// ログインしているユーザーのみホーム画面に飛ばす
Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

// ユーザー登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login.post', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// ユーザー詳細画面
Route::get('users/{id}','UsersController@show')->name('user.show');

// ユーザープロフィール編集画面
Route::get('users/{id}/edit','UsersController@edit')->name('user.edit');

// ユーザープロフィールを更新
Route::put('users/{id}','UsersController@update')->name('user.update');