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



Route::resource('usuario','UsuarioController');

Route::resource('usuario', 'UsuarioController',
                ['only' => ['index', 'show']]);

Route::resource('usuario', 'UsuarioController',
                ['except' => ['create', 'store', 'update', 'destroy']]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Only - Except
//Route::resource('notification', 'NotificationController', ['only' => [
//     'index','create', 'store', 'show','edit','update', 'destroy'
// ]]);


Route::resource('notification', 'NotificationController');

Route::get('index', 'NotificationController@index');
