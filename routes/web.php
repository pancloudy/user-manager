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