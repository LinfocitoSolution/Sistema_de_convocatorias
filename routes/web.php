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
Route::resource('registro_convocatoria', 'CallController@register');
Route::resource('noregister', 'CallController@noregister');
Route::resource('login', 'CallController@login');
<<<<<<< HEAD
Route::resource('unregistered', 'CallController@unregistered');
Route::get('registro_usuario', 'CallController@registerUser');
=======
Route::resource('prueba', 'CallController@prueba');

>>>>>>> master
