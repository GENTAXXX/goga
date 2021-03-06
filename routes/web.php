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
Route::get('/lowongan', 'LowonganController@index')->name('lowongan');
Route::get('lowongan/tambah', 'LowonganController@tambah');
Route::get('/create', 'CreateController@index')->name('create');
Route::resource('jobs', 'JobController');
