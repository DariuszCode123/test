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
    return view('welcome');
});

Route::get('nauczyciele/edit/{id}', 'nauczycielController@edit');

Route::get('nauczyciele/create', 'nauczycielController@create');

Route::get('nauczyciele/', 'nauczycielController@index');

Route::get('nauczyciele/{id}', 'nauczycielController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
