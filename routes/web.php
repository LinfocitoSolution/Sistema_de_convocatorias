<?php
//use App\Convocatoria;
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

//----------------------------------rutas pagina principal-----------------------------------------
 Route::get('index', [
     'as' => 'home',
     'uses' => 'HomeController@index'
 ]);//esto es por que al hacer click en el boton inicio nos lleva a /index
Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);
 Route::get('/home', [
     'as' => 'home',
     'uses' => 'HomeController@index'
 ]);

//---------------------------------rutas registro y autenticacion------------------------------------
Auth::routes();
Route::get('administrador','HomeController@registrado')->middleware('permission:view-access-management');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Route::post('/verificar','LoginController@LoginUsuario');
//Route::get('registrado', 'LoginController@registrado');

//----------------------------------rutas de usuario--------------------------------------------------
Route::resource('usuarios', 'UserController');

//##################### CONVOCATORIA ##########################
Route::resource('call', 'CallController');
Route::get('convocatoria','HomeController@convocatorias')->name('convocatoria');
//##############################################################
Route::get('test', function () {
    return view('pruebaVerify');
});
Route::get('reset', function () {
    return view('auth.index_ResetPassword');
});
//##################### ROL ####################################
Route::resource('roles', 'RoleController');
//#################### AREA ####################################
Route::resource('area', 'AreaController');
//##############################################################

//######################ROTULO###################################
Route::get('formulario_postulacion','PostulantController@index')->name('postulacion.form');
Route::get('postulante_{user}_show','PostulantController@show')->name('postulante.show');
Route::get('postulante_edit_{user}','PostulantController@edit')->name('postulante.edit');
Route::put('postulante_{user}_update','PostulantController@update')->name('postulante.update');
// Route::resource('postulante','PostulantController');
//################################################################
Route::post('reset_password','\App\Http\Controllers\Auth\ResetPasswordController@resetPassword');
Route::get('enviar_resetPassword','\App\Http\Controllers\Auth\ResetPasswordController@enviarReset_Password');
Route::post('recuperar','\App\Http\Controllers\Auth\ResetPasswordController@recuperar');

//###################### Email ###################################
Route::get('mail/send', 'MailController@send');
Route::get('vista', function () {
    return view('auth.mails.email');
});

//##################### Unidades ########################
Route::resource('unidades','UnidadController');
//#####################Requerimientos####################
Route::resource('requerimientos','RequerimientosController');