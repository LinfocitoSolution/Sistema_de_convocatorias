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
    Route::resource('requerimientos','RequerimientosController');//ya tiene middleware

    //################FECHAS############
    Route::resource('fechas','FechaController');////ya tiene middleware
    Route::resource('conocimientoCalif','ConocimientoCalifController');//ya tiene middleware

    //###########Convocatorias#############################endregion
    Route::resource('call', 'CallController');//ya tiene middleware




    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    #######################  Habilitados ###############################
    Route::resource('habilitado_inhabilitado','ListaController@index');
    Route::get('documentosPresentar_{user}', 'ListaController@indexlab')->name('documentos.indexlab')->middleware('permission:documentos_indexlab habilitado');
    Route::get('documentosPresentardoc_{user}','ListaController@indexdoce')->name('documentos.indexdoce')->middleware('permission:documentos_indexdoce habilitado');
    Route::put('habilitar_{user}','ListaController@habilitar')->name('documentos.habilitar')->middleware('permission:documentos_habilitar habilitado');
    Route::put('documentosPublicar_{user}','ListaController@publicar')->name('documento.publicar')->middleware('permission:documentos_publicar habilitado');
    Route::put('documentosQuitar_{user}','ListaController@quitar')->name('documento.quitar')->middleware('permission:documento_quitar habilitado');
    Route::get('descripcionPostulante{user}','ListaController@describe')->name('descripcion.desc')->middleware('permission:descripcion habilitado');

    ################ TABLA CALIF Conocimiento ############################################
    Route::get('form_primerPaso','ConocimientoCalifController@primerPaso')->name('calif.primero')->middleware('permission:calfi_primero tablaCalif');
    Route::get('form_segundoPaso','ConocimientoCalifController@segundoPaso')->name('calif.segundo')->middleware('permission:calfi_segundo tablaCalif');

    Route::get('listarPostulantes','ConocimientoCalifController@listarPostulantes')->name('lista.postulantes')->middleware('permission:list_postulantes tablaCalif');
    Route::get('calificarPostulante_{user}','ConocimientoCalifController@calificarPostulant')->name('calificar.postulante')->middleware('permission:calificar_postulantes tablaCalif');
    Route::get('calificarPostulanteDocencia_{user}','ConocimientoCalifController@calificarPostDoc')->name('calificar.postulanteDoc')->middleware('permission:calificar_postlanteDoc tablaCalif');
    Route::post('registrarNotas_{user}','ConocimientoCalifController@registrarNotas')->name('registrar.notas')->middleware('permission:registrar_notas tablaCalif');
    Route::post('guardarTabla_{call}','ConocimientoCalifController@store')->name('registrar.tabla')->middleware('permission:registrar_tabla tablaCalif');
    Route::post('regNotasDoc_{user}','ConocimientoCalifController@regNotasDocencia')->name('registrar.notasDoc')->middleware('permission:registrar_notasDoc tablaCalif');
    Route::delete('eliminarTabla_{item}','ConocimientoCalifController@destroy')->name('tabla.destroy')->middleware('permission:delete tabla tablaCalif');
    Route::post('eliminarNota_{user}','ConocimientoCalifController@eliminarCalificacion')->name('eliminar.nota')->middleware('permission:delete nota tablaCalif');
    // Route::put('calificacion_con_publicar_{user}','ConocimientoCalifController@publicar')->name('conocimiento.publicar')->middleware('permission:conocimiento_publicar tablaCalif');
    // Route::put('calif__con_quitar_{user}','ConocimientoCalifController@quitarPublicacion')->name('conocimiento.quitar')->middleware('permission:conocimiento_quitar tablaCalif');
    Route::put('calificacion_con_publicar_{user}','ConocimientoCalifController@publicar')->name('conocimiento.publicar')->middleware('permission:conocimiento_publicar tablaCalif');
    Route::put('calif__con_quitar_{user}','ConocimientoCalifController@quitarPublicacion')->name('conocimiento.quitar')->middleware('permission:conocimiento_quitar tablaCalif');

    ######################## Méritos #################################################################
    Route::get('Merito','MeritosController@index')->name('merito.index')->middleware('permission:list meritos');
    Route::get('Mform_primerPaso','MeritosController@primerPaso')->name('merito.primero')->middleware('permission:primer_paso meritos');

    Route::get('crear-merito','MeritosController@create')->name('merito.create')->middleware('permission:create meritos');
    Route::post('merito_store','MeritosController@store')->name('merito.storemerito')->middleware('permission:create meritos');
    Route::get('createsubmerito_{merito}','MeritosController@createsubmerito')->name('submerito.create')->middleware('permission:create submeritos');
    Route::post('submerito_store_{merito}','MeritosController@submeritostore')->name('submerito.storemerito')->middleware('permission:create submeritos');
    Route::delete('meritoeliminar_{merito}','MeritosController@destroy')->name('merito.destroy')->middleware('permission:delete meritos');

    /*Route::get('formdoc','ConocimientoCalifController@formdoc')->name('calif.formdoc');*/
    Route::get('submerito-index_{merito}','MeritosController@indexsubmerito')->name('subMerito.indexsubmerito')->middleware('permission:list submerito');
    Route::delete('submeritoeliminar_{submerito}','MeritosController@destroysub')->name('submerito.destroy')->middleware('permission:delete submerito');
    Route::get ('descripcion_{submerito}','MeritosController@indexdescripcion')->name('descripcion.index')->middleware('permission:descripcion submerito');
    Route::get('crearDescripcion_{submerito}','MeritosController@createdescripcion')->name('descripcion.create')->middleware('permission:create descripcion_submerito');
    Route::post('descripcionStore_{submerito}','MeritosController@storedescripcion')->name('descripcion.store')->middleware('permission:create descripcion_submerito');
    Route::delete('descripcioneliminar_{desc}','MeritosController@destroydes')->name('descripcion.destroy')->middleware('permission:delete descripcion_submerito');

    #################################calificacion meritos#################################
    Route::get('calificacion','CalificacionController@index')->name('calif.index')->middleware('permission:lits calificacion_meritos');
    Route::get('califMerito_{user}','CalificacionController@create')->name('crearCalif.create')->middleware('permission:create calificacion_meritos');
    Route::post('calif_store_{user}','CalificacionController@store')->name('calif.store')->middleware('permission:create calificacion_meritos');
    Route::delete('calificacion_eliminar_{user}','CalificacionController@delete')->name('calif.delete')->middleware('permission:delete calificacion_meritos');
    // Route::put('calificacion_publicar_{user}','CalificacionController@publicar')->name('calif.publicar')->middleware('permission:publicar calificacion_meritos');
    // Route::put('calif_quitar_{user}','CalificacionController@quitarPublicacion')->name('calif.quitar')->middleware('permission:quitar calificacion_meritos');
    Route::put('calificacion_publicar_{user}','CalificacionController@publicar')->name('calif.publicar')->middleware('permission:publicar calificacion_meritos');
    Route::put('calif_quitar_{user}','CalificacionController@quitarPublicacion')->name('calif.quitar')->middleware('permission:quitar calificacion_meritos');
    Route::get('calificacion_merito_{user}','CalificacionController@muestra')->name('calificacion.merito')->middleware('permission:calificacion_meritos');
    ##################### NotaFinal  ###########
    //Route::get('notFinal','CalificacionController@notafinal')->name('NotaFin.notafinal')->middleware('permission:notaFinal');
    Route::get('notasFinales','ConocimientoCalifController@tablaNotasFinales')->name('nota.final')->middleware('permission:notaFinal');
    ################ Libro de recepcion ########

    Route::get('libro','RecepcionController@index')->name('libro.index')->middleware('permission:list books');
    Route::get('crear_libro','RecepcionController@create')->name('libro.create')->middleware('permission:create books');
    Route::post('libro_store','RecepcionController@store')->name('libro.store')->middleware('permission:create books');
    Route::delete('libro_delete_{libro}','RecepcionController@destroy')->name('libro.delete')->middleware('permission:delete books');

    ################ Tematica ######################
    Route::get('tematica','TematicaController@index')->name('tematica.index')->middleware('permission:list tematics');
    Route::get('create','TematicaController@create')->name('tematica.create')->middleware('permission:create tematics');
    Route::get('tematicaConvocatoria','TematicaController@tematicaConvocatoria')->name('tematica.convocatoria')->middleware('permission:call tematics');
    Route::get('tematicaUnidad','TematicaController@tematicaUnidad')->name('tematica.unidad')->middleware('permission:call unit_tematics');
    Route::post('guardarTematica_{call}','TematicaController@store')->name('tematica.store')->middleware('permission:create tematics');
    Route::delete('eliminarTematicas_{call}','TematicaController@destroy')->name('tematica.destroy')->middleware('permission:delete tematics');
    Route::get('show_{call}','TematicaController@show')->name('tematica.show')->middleware('permission:list tematics');

    //##################### CONVOCATORIA ########################## FALTA MIDDLEWARE
    // Route::resource('call', 'CallController');
    Route::get('convocatoria','HomeController@convocatorias')->name('convocatoria');
    Route::get('generar_{call}', 'CallController@generarConvocatoria')->name('generar');
    Route::get('call_createdoc','CallController@createdoc')->name('call.createdoc')->middleware('permission:create announcements_doc');
    Route::get('call_{call}_editardoc','CallController@editardoc')->name('call.editardoc');
    Route::post('call_storedoc','CallController@storedoc')->name('call.storedoc');
    Route::delete('call_deletedoc_{call}','CallController@destroydoc')->name('call.destroydoc');
    Route::put('call_updatedoc_{call}','CallController@updatedoc')->name('call.updatedoc');
    // Route::get('generarConv_{call}', 'CallController@generarConvocatoriaLabo')->name('generarConv');
    // Route::get('generarConvDoc_{call}', 'CallController@generarConvocatoriaDocencia')->name('generarConvDoc');
    Route::put('call_publicar_{call}','CallController@publicarConvocatoria')->name('call.publicar');
    Route::put('call_quitar_{call}','CallController@quitarPublicacion')->name('call.quitar');
    
});

Route::get('generarConv_{call}', 'CallController@generarConvocatoriaLabo')->name('generarConv');//vista principal
Route::get('generarConvDoc_{call}', 'CallController@generarConvocatoriaDocencia')->name('generarConvDoc');


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
//##############################################################
Route::get('test', function () {
    return view('pruebaVerify');
});// falta los middlewares
Route::get('reset', function () {
    return view('auth.index_ResetPassword');
});// falta los middlewares

//######################ROTULO y POSTULANTE###################################
Route::group(['middleware' => 'permission:rotulo_postulante'], function () {// restriccion formulario de postulante
    Route::get('postulante_{user}_show','PostulantController@show')->name('postulante.show');//->middleware('permission:show_postulante rotulopostulante');
    Route::get('postulante_edit_{user}','PostulantController@edit')->name('postulante.edit');//->middleware('permission:edit_postulante rotulopostulante');
    Route::put('postulante_{user}_update','PostulantController@update')->name('postulante.update');//->middleware('permission:postulante_update rotulopostulante');
    // Route::resource('postulante','PostulantController');
    Route::get('primerPaso','PostulantController@primerPaso')->name('rotulo.primer');//->middleware('permission:primer_rotulo rotulopostulante');
    Route::get('segundoPaso','PostulantController@segundoPaso')->name('rotulo.segundo');//->middleware('permission:segundo_rotulo rotulopostulante');
    Route::get('formularioPostulacion','PostulantController@index')->name('postulacion.form');//->middleware('permission:formulario_postulacion rotulopostulante');
    Route::put('cancelar_postulacion_{user}','PostulantController@cancelarPostulacion')->name('cancelar.postulacion');//->middleware('permission:cancelar_postulacion rotulopostulante');
    Route::post('guardarRotulo','PostulantController@guardarRotulo')->name('rotulo.guardar');//->middleware('permission:rotulo_guardar rotulopostulante');
});
//################################################################
Route::post('reset_password','\App\Http\Controllers\Auth\ResetPasswordController@resetPassword');
Route::get('enviar_resetPassword','\App\Http\Controllers\Auth\ResetPasswordController@enviarReset_Password');
Route::post('recuperar','\App\Http\Controllers\Auth\ResetPasswordController@recuperar');

//###################### Email ###################################
Route::get('mail/send', 'MailController@send');
Route::get('vista', function () {
    return view('auth.mails.email');
});
Route::get('/denied', ['as' => 'denied', function() {
    return view('errors.401');
}]);
