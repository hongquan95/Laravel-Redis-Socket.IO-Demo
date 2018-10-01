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
Route::get('socket', 'SocketController@index')->name('socket');
Route::post('sendmessage', 'SocketController@sendMessage')->name('send');
Route::get('writemessage', 'SocketController@writeMessage')->name('write');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test/{str}', 'HomeController@test');
