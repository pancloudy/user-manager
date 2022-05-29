<?php

use Illuminate\Support\Facades\Route;


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
Route::get('/main','App\Http\Controllers\UserController@main')->name('user.main');
Route::get( 'main/listusers', 'App\Http\Controllers\UserController@index')->name('user.listusers');
Route::get( 'main/details', 'App\Http\Controllers\UserController@getUserById')->name('user.getUserById');
Route::get( 'main/new', 'App\Http\Controllers\UserController@new')->name('user.new');
Route::get('main/new/save/','App\Http\Controllers\UserController@save')->name('user.save');
Route::get('main/search', 'App\Http\Controllers\UserController@searchByName')->name('user.searchByName');
Route::delete('main/delete/{id?}','App\Http\Controllers\UserController@delete')->name('user.delete');
Route::get('main/edit/{id}','App\Http\Controllers\UserController@edit')->name('user.edit');
Route::put('update/{id}', 'App\Http\Controllers\UserController@update')->name('user.update');
