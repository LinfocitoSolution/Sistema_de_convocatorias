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
Route::resource('unregistered', 'CallController@unregistered');
Route::get('postulante', 'CallController@postulante');
Route::get('registro_jefeDep', 'CallController@regJefDep');
Route::get('registro_director', 'CallController@regDirector');
Route::get('comision_merito', 'CallController@comMerito');

Route::get('comision_conocimiento', 'CallController@conocimiento');

Route::get('/register', [
    'as' => 'auth.register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
]);

Route::post('/register_store', [
    'as' => 'auth.register_store',
    'uses' => 'Auth\RegisterController@storeRegistration'
]);
Route::get('secretaria', 'CallController@secretaria');
Route::get('plantilla', 'CallController@plantilla');
Route::resource('log', 'CallController@log');