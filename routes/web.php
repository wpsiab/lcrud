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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('crud','CrudController@index')->name('crud');
Route::post('crud','CrudController@store')->name('store');
Route::get('crud/view','CrudController@view')->name('view');
Route::get('crud/edit/{id}','CrudController@edit')->name('edit');
Route::post('crud/edit/{id}','CrudController@edit_save')->name('edit_save');
Route::delete('crud/edit/{id}','CrudController@delete')->name('delete');
