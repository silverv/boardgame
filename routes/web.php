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

Route::get('/', 'InfoController@index')->name('index');
Route::get('/about', 'InfoController@about')->name('about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/game', 'GameController@index')->name('game')->middleware('auth');
Route::get('/game/{user}', 'GameController@get_game')->name('api.get_game')->middleware('auth');
Route::put('/move/{user}', 'GameController@move')->name('api.move')->middleware('auth');

Route::put('/user/update/{user}', 'UserController@update')->name('user.update')->middleware('auth');
