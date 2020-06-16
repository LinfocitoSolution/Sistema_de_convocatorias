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
Route::get('administrador','HomeController@registrado');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Route::post('/verificar','LoginController@LoginUsuario');
//Route::get('registrado', 'LoginController@registrado');

//----------------------------------rutas de usuario--------------------------------------------------
Route::get('usuarios','UserController@index')->name('usuarios.index');
Route::get('usuarios_create','UserController@create')->name('usuarios.create');
Route::post('usuarios_guardar','UserController@store')->name('usuarios.guardar');
Route::get('usuarios_editar_{user}','UserController@edit')->name('usuarios.edit');
Route::put('usuarios_update_{user}','UserController@update')->name('usuarios.update');
Route::delete('usuarios_delete_{user}','UserController@destroy')->name('usuarios.destroy');
Route::get('usuarios_show_{user}','UserController@show')->name('usuarios.show');

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
Route::get('roles_create', [
    'as' => 'roles.create',
    'uses' => 'RoleController@create',
]);
Route::get('roles', [
    'as' => 'roles.index',
    'uses' => 'RoleController@index',
]);
// Route::get('rol/{rol}/edit', [
//     'as' => 'roles.edit',
//     'uses' => 'RoleController@edit',
// ]);
Route::resource('rol','RoleController');
Route::delete('roles_{rol}', [
    'as' => 'roles.destroy',
    'uses' => 'RoleController@destroy',
]);
Route::post('roles_store', [
    'as' => 'roles.store',
    'uses' => 'RoleController@store',
]);
Route::get('edit', 'RoleController@edit');
//##############################################################


//#################### AREA ####################################
Route::get('areas','AreaController@index')->name('areas.index');
Route::get('areas_create','AreaController@create')->name('areas.create');
Route::get('areas_{area}_edit','AreaController@edit')->name('areas.edit');
Route::post('areas_store','AreaController@store')->name('areas.store');
Route::delete('areas_delete_{area}','AreaController@destroy')->name('areas.destroy');
Route::put('areas_update_{area}','AreaController@update')->name('areas.update');
// Route::resource('areas', 'AreaController');
//##############################################################

//######################ROTULO###################################
Route::get('formulario_postulacion','PostulantController@index')->name('postulacion.form');
Route::get('postulante_show','PostulantController@show')->name('postulante.show');
Route::get('postulante_edit','PostulantController@show')->name('postulante.edit');
//################################################################
Route::post('reset_password','\App\Http\Controllers\Auth\ResetPasswordController@resetPassword');
Route::get('enviar_resetPassword','\App\Http\Controllers\Auth\ResetPasswordController@enviarReset_Password');
Route::post('recuperar','\App\Http\Controllers\Auth\ResetPasswordController@recuperar');

//###################### Email ###################################
Route::get('mail/send', 'MailController@send');
Route::get('vista', function () {
    return view('auth.mails.email');
});
