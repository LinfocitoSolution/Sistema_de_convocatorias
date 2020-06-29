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
//----------------------------------rutas de usuario--------------------------------------------------
Route::get('usuarios','UserController@index')->name('usuarios.index')->middleware('permission:list users');
Route::get('usuarios_create','UserController@create')->name('usuarios.create')->middleware('permission:create users');
Route::post('usuarios_guardar','UserController@store')->name('usuarios.guardar')->middleware('permission:create users');
Route::get('usuarios_editar_{user}','UserController@edit')->name('usuarios.edit')->middleware('permission:edit users');
Route::put('usuarios_update_{user}','UserController@update')->name('usuarios.update')->middleware('permission:edit users');
Route::delete('usuarios_delete_{user}','UserController@destroy')->name('usuarios.destroy')->middleware('permission:delete users');
Route::get('usuarios_show_{user}','UserController@show')->name('usuarios.show')->middleware('permission:list users');
// Route::resource('usuarios', 'UserController');

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
Route::get('rol/{rol}/edit', [
    'as' => 'roles.edit',
    'uses' => 'RoleController@edit',
]);
Route::delete('roles_{rol}', [
    'as' => 'roles.destroy',
    'uses' => 'RoleController@destroy',
]);
Route::post('roles_store', [
    'as' => 'roles.store',
    'uses' => 'RoleController@store',
]);
Route::get('edit', 'RoleController@edit');
// Route::resource('roles', 'RoleController');
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
Route::get('unidades','UnidadController@index')->name('unidades.index');
Route::get('unidades_create','UnidadController@create')->name('unidades.create');
Route::get('unidades_{unidad}_edit','UnidadController@edit')->name('unidades.edit');
Route::post('unidades_store','UnidadController@store')->name('unidades.store');
Route::delete('unidades_delete_{unidad}','UnidadController@destroy')->name('unidades.destroy');
Route::put('unidades_update_{unidad}','UnidadController@update')->name('unidades.update');
// Route::resource('unidades','UnidadController');
//#####################Requerimientos####################
Route::resource('requerimientos','RequerimientosController');