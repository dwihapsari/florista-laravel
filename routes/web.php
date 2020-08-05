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

Route::get('home', function () {
    return view('home');
});

Route::get('template', function () {
    return view('template');
});

Route::get('index', 'FloristaController@index');

Route::get('testimoni', 'FloristaController@testimoni');

Route::post('testi', 'FloristaController@store');

Route::get('input_bunga', 'FloristaController@input_bunga');

Route::get('lihat_bunga', 'FloristaController@lihat_bunga');

Route::get('create', 'FloristaController@create');

Route::get('bunga/{bunga}', 'FloristaController@show_bunga');

Route::post('bunga', 'FloristaController@store_bunga');

Route::get('bunga/{bunga}/edit', 'FloristaController@edit');

Route::patch('bunga/{bunga}', 'FloristaController@update');

Route::delete('bunga/{bunga}', 'FloristaController@destroy');

Route::get('login', 'FloristaController@login');

Route::post('login/user', 'FloristaController@loginUser');

Route::get('register', 'FloristaController@register');

Route::post('register/user', 'FloristaController@registerUser');

Route::get('register_admin', 'FloristaController@registerAdmin');

Route::post('register_admin/admin', 'FloristaController@registerAdminPost');

Route::get('login_admin', 'FloristaController@loginAdmin');

Route::post('login_admin/admin', 'FloristaController@loginAdminPost');

Route::get('about_us', 'FloristaController@aboutUs');

Route::get('logout', 'FloristaController@logout');
