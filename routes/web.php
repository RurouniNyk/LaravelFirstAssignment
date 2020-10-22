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

Route::get('/', 'MyController@index')->name('homepage');
Route::get('news','MyController@news')->name('newspage');
Route::get('music','MyController@music')->name('musicpage');
Route::get('video','MyController@video')->name('videopage');