<?php
//use App\Convocatoria;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can reregister web routes for your application. These
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
 
Route::group(['middleware' => 'permission:view-access-management'], function () {// restriccion de dashboard
    Route::get('administrador','HomeController@registrado');
    //----------------------------------RUTAS USUARIO--------------------------------------------------
    Route::get('usuarios','UserController@index')->name('usuarios.index')->middleware('permission:list users');
    Route::get('usuarios_create','UserController@create')->name('usuarios.create')->middleware('permission:create users');
    Route::post('usuarios_guardar','UserController@store')->name('usuarios.guardar')->middleware('permission:create users');
    Route::get('usuarios_editar_{user}','UserController@edit')->name('usuarios.edit')->middleware('permission:edit users');
    Route::put('usuarios_update_{user}','UserController@update')->name('usuarios.update')->middleware('permission:edit users');
    Route::delete('usuarios_delete_{user}','UserController@destroy')->name('usuarios.destroy')->middleware('permission:delete users');
    Route::get('usuarios_show_{user}','UserController@show')->name('usuarios.show')->middleware('permission:list users');
    // Route::resource('usuarios', 'UserController');

    //##################### ROL ####################################
    Route::get('roles_create', [
        'as' => 'roles.create',
        'uses' => 'RoleController@create',
    ])->middleware('permission:create roles');
    Route::get('roles', [
        'as' => 'roles.index',
        'uses' => 'RoleController@index',
    ])->middleware('permission:list roles');
    Route::get('rol_{rol}_edit', [
        'as' => 'roles.edit',
        'uses' => 'RoleController@edit',
    ])->middleware('permission:edit roles');
    Route::delete('roles_{rol}', [
        'as' => 'roles.destroy',
        'uses' => 'RoleController@destroy',
    ])->middleware('permission:delete roles');
    Route::post('roles_store', [
        'as' => 'roles.store',
        'uses' => 'RoleController@store',
    ])->middleware('permission:create roles');
    Route::put('roles_{rol}', [
        'as' => 'roles.update',
        'uses' => 'RoleController@update',
    ])->middleware('permission:edit roles');
    // Route::get('edit', 'RoleController@edit');
    // Route::resource('roles', 'RoleController');

    //#################### AREA ####################################
    Route::resource('area', 'AreaController');
    //##############################################################

    //##################### Unidades ########################
    Route::get('unidades','UnidadController@index')->name('unidades.index')->middleware('permission:list units');
    Route::get('unidades_create','UnidadController@create')->name('unidades.create')->middleware('permission:create units');
    Route::get('unidades_{unidad}_edit','UnidadController@edit')->name('unidades.edit')->middleware('permission:edit units');
    Route::post('unidades_store','UnidadController@store')->name('unidades.store')->middleware('permission:create units');
    Route::delete('unidades_delete_{unidad}','UnidadController@destroy')->name('unidades.destroy')->middleware('permission:delete units');
    Route::put('unidades_update_{unidad}','UnidadController@update')->name('unidades.update')->middleware('permission:edit units');
    // Route::resource('unidades','UnidadController');
    //#####################Requerimientos####################
    Route::resource('requerimientos','RequerimientosController');

    //################FECHAS############
    Route::resource('fechas','FechaController');
    Route::resource('conocimientoCalif','ConocimientoCalifController');

    //###########Convocatorias#############################endregion
    Route::resource('call', 'CallController');


    
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
//##################### CONVOCATORIA ##########################
// Route::resource('call', 'CallController');
Route::get('convocatoria','HomeController@convocatorias')->name('convocatoria');// falta los middlewares
Route::get('generar_{call}', 'CallController@generarConvocatoria')->name('generar');// falta los middlewares
Route::get('call_createdoc','CallController@createdoc')->name('call.createdoc');
Route::get('call_{call}_editardoc','CallController@editardoc')->name('call.editardoc');
Route::post('call_storedoc','CallController@storedoc')->name('call.storedoc');
Route::delete('call_deletedoc_{call}','CallController@destroydoc')->name('call.destroydoc');
Route::put('call_updatedoc_{call}','CallController@updatedoc')->name('call.updatedoc');
Route::get('generarConv_{call}', 'CallController@generarConvocatoriaLabo')->name('generarConv');
Route::get('generarConvDoc_{call}', 'CallController@generarConvocatoriaDocencia')->name('generarConvDoc');
Route::put('call_publicar_{call}','CallController@publicarConvocatoria')->name('call.publicar');
Route::put('call_quitar_{call}','CallController@quitarPublicacion')->name('call.quitar');
//##############################################################
Route::get('test', function () {
    return view('pruebaVerify');
});// falta los middlewares
Route::get('reset', function () {
    return view('auth.index_ResetPassword');
});// falta los middlewares

//######################ROTULO y POSTULANTE###################################
Route::get('postulante_{user}_show','PostulantController@show')->name('postulante.show');// falta los middlewares
Route::get('postulante_edit_{user}','PostulantController@edit')->name('postulante.edit');// falta los middlewares
Route::put('postulante_{user}_update','PostulantController@update')->name('postulante.update');// falta los middlewares
// Route::resource('postulante','PostulantController');
Route::get('primerPaso','PostulantController@primerPaso')->name('rotulo.primer');
Route::get('segundoPaso','PostulantController@segundoPaso')->name('rotulo.segundo');
Route::get('formularioPostulacion','PostulantController@index')->name('postulacion.form');// falta los middlewares
Route::put('cancelar_postulacion_{user}','PostulantController@cancelarPostulacion')->name('cancelar.postulacion');

Route::post('guardarRotulo','PostulantController@guardarRotulo')->name('rotulo.guardar');
//################################################################
Route::post('reset_password','\App\Http\Controllers\Auth\ResetPasswordController@resetPassword');// falta los middlewares
Route::get('enviar_resetPassword','\App\Http\Controllers\Auth\ResetPasswordController@enviarReset_Password');// falta los middlewares
Route::post('recuperar','\App\Http\Controllers\Auth\ResetPasswordController@recuperar');// falta los middlewares

//###################### Email ###################################
Route::get('mail/send', 'MailController@send');// falta los middlewares
Route::get('vista', function () {
    return view('auth.mails.email');
});// falta los middlewares

Route::get('/denied', ['as' => 'denied', function() {
    return view('errors.401');
}]);

#######################  Habilitados ###############################
Route::resource('habilitado_inhabilitado','ListaController@index');
Route::get('documentosPresentar_{user}', 'ListaController@indexdoc')->name('documentos.indexdoc');
Route::put('habilitar_{user}','ListaController@habilitar')->name('documentos.habilitar');
################tablacalif########
Route::get('form_primerPaso','ConocimientoCalifController@primerPaso')->name('calif.primero');
Route::get('form_segundoPaso','ConocimientoCalifController@segundoPaso')->name('calif.segundo');
