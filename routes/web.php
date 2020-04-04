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
Route::resource('docencia', 'CallController@docencia');
Route::resource('formulariopost', 'CallController@formulariopost');
Route::resource('convocatorias', 'CallController@convocatorias');
Route::resource('calendario', 'CallController@calendario');
Route::resource('showlogin', 'CallController@showlogin');