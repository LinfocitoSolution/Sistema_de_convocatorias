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
 
Route::group(['middleware' => 'permission:panel de datos'], function () {// restriccion de dashboard
    Route::get('administrador','HomeController@registrado');
    //----------------------------------RUTAS USUARIO--------------------------------------------------
    Route::group(['middleware' => 'permission:admin_usuarios'], function () {
        Route::get('usuarios','UserController@index')->name('usuarios.index');
        Route::get('usuarios_create','UserController@create')->name('usuarios.create');
        Route::post('usuarios_guardar','UserController@store')->name('usuarios.guardar');
        Route::get('usuarios_editar_{user}','UserController@edit')->name('usuarios.edit');
        Route::put('usuarios_update_{user}','UserController@update')->name('usuarios.update');
        Route::delete('usuarios_delete_{user}','UserController@destroy')->name('usuarios.destroy');
        Route::get('usuarios_show_{user}','UserController@show')->name('usuarios.show');
        // Route::resource('usuarios', 'UserController');
    });
    //##################### ROL ####################################
    Route::group(['middleware' => 'permission:admin_roles'], function () {
        Route::get('roles_create', [
            'as' => 'roles.create',
            'uses' => 'RoleController@create',
        ]);
        Route::get('roles', [
            'as' => 'roles.index',
            'uses' => 'RoleController@index',
        ]);
        Route::get('rol_{rol}_edit', [
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
        Route::put('roles_{rol}', [
            'as' => 'roles.update',
            'uses' => 'RoleController@update',
        ]);
    });
    Route::group(['middleware' => 'permission:responsable de convocatorias'], function () {        
        //#################### AREA ####################################
        Route::resource('area', 'AreaController');        
        //##################### Unidades ########################
        Route::get('unidades','UnidadController@index')->name('unidades.index');
        Route::get('unidades_create','UnidadController@create')->name('unidades.create');
        Route::get('unidades_{unidad}_edit','UnidadController@edit')->name('unidades.edit');
        Route::post('unidades_store','UnidadController@store')->name('unidades.store');
        Route::delete('unidades_delete_{unidad}','UnidadController@destroy')->name('unidades.destroy');
        Route::put('unidades_update_{unidad}','UnidadController@update')->name('unidades.update');
        // Route::resource('unidades','UnidadController');

        //###########Convocatorias#############################endregion
        Route::resource('call', 'CallController');//ya tiene middleware
        //################FECHAS############
        Route::resource('fechas','FechaController');////ya tiene middleware
        //#####################Requerimientos####################
        Route::resource('requerimientos','RequerimientosController');//ya tiene middleware
        // ################ Tematica ######################
        Route::get('tematica','TematicaController@index')->name('tematica.index');
        Route::get('create','TematicaController@create')->name('tematica.create');
        Route::get('tematicaConvocatoria','TematicaController@tematicaConvocatoria')->name('tematica.convocatoria');
        Route::get('tematicaUnidad','TematicaController@tematicaUnidad')->name('tematica.unidad');
        Route::post('guardarTematica_{call}','TematicaController@store')->name('tematica.store');
        Route::delete('eliminarTematicas_{call}','TematicaController@destroy')->name('tematica.destroy');
        Route::get('show_{call}','TematicaController@show')->name('tematica.show');
        Route::get('notasFinales','ConocimientoCalifController@tablaNotasFinales')->name('nota.final');
        
        //##################### CONVOCATORIA ########################## FALTA MIDDLEWARE
        // Route::resource('call', 'CallController');
        Route::get('convocatoria','HomeController@convocatorias')->name('convocatoria');
        Route::get('generar_{call}', 'CallController@generarConvocatoria')->name('generar');
        Route::get('call_createdoc','CallController@createdoc')->name('call.createdoc');
        Route::get('call_{call}_editardoc','CallController@editardoc')->name('call.editardoc');
        Route::post('call_storedoc','CallController@storedoc')->name('call.storedoc');
        Route::delete('call_deletedoc_{call}','CallController@destroydoc')->name('call.destroydoc');
        Route::put('call_updatedoc_{call}','CallController@updatedoc')->name('call.updatedoc');        
        Route::put('call_publicar_{call}','CallController@publicarConvocatoria')->name('call.publicar');
        Route::put('call_quitar_{call}','CallController@quitarPublicacion')->name('call.quitar');
    });

    
    // ################ TABLA CALIF Conocimiento ############################################
    Route::group(['middleware' => 'permission:comision conocimientos'], function () {

        Route::get('form_primerPaso','ConocimientoCalifController@primerPaso')->name('calif.primero');
        Route::get('form_segundoPaso','ConocimientoCalifController@segundoPaso')->name('calif.segundo');
        Route::get('listarPostulantes','ConocimientoCalifController@listarPostulantes')->name('lista.postulantes');
        Route::get('calificarPostulante_{user}','ConocimientoCalifController@calificarPostulant')->name('calificar.postulante');
        Route::get('calificarPostulanteDocencia_{user}','ConocimientoCalifController@calificarPostDoc')->name('calificar.postulanteDoc');
        Route::post('registrarNotas_{user}','ConocimientoCalifController@registrarNotas')->name('registrar.notas');
        Route::post('guardarTabla_{call}','ConocimientoCalifController@store')->name('registrar.tabla');
        Route::post('regNotasDoc_{user}','ConocimientoCalifController@regNotasDocencia')->name('registrar.notasDoc');
        Route::delete('eliminarTabla_{item}','ConocimientoCalifController@destroy')->name('tabla.destroy');
        Route::post('eliminarNota_{user}','ConocimientoCalifController@eliminarCalificacion')->name('eliminar.nota');
        Route::put('calificacion_con_publicar_{user}','ConocimientoCalifController@publicar')->name('conocimiento.publicar');
        Route::put('calif__con_quitar_{user}','ConocimientoCalifController@quitarPublicacion')->name('conocimiento.quitar');
        Route::resource('conocimientoCalif','ConocimientoCalifController');//ya tiene middleware
    });

    
    // ######################## Méritos #################################################################
    Route::group(['middleware' => 'permission:comision meritos'], function () {

        Route::get('Merito','MeritosController@index')->name('merito.index');
        Route::get('Mform_primerPaso','MeritosController@primerPaso')->name('merito.primero');

        Route::get('crear-merito','MeritosController@create')->name('merito.create');
        Route::post('merito_store','MeritosController@store')->name('merito.storemerito');
        Route::get('createsubmerito_{merito}','MeritosController@createsubmerito')->name('submerito.create');
        Route::post('submerito_store_{merito}','MeritosController@submeritostore')->name('submerito.storemerito');
        Route::delete('meritoeliminar_{merito}','MeritosController@destroy')->name('merito.destroy');

        
        Route::get('submerito-index_{merito}','MeritosController@indexsubmerito')->name('subMerito.indexsubmerito');
        Route::delete('submeritoeliminar_{submerito}','MeritosController@destroysub')->name('submerito.destroy');
        Route::get ('descripcion_{submerito}','MeritosController@indexdescripcion')->name('descripcion.index');
        Route::get('crearDescripcion_{submerito}','MeritosController@createdescripcion')->name('descripcion.create');
        Route::post('descripcionStore_{submerito}','MeritosController@storedescripcion')->name('descripcion.store');
        Route::delete('descripcioneliminar_{desc}','MeritosController@destroydes')->name('descripcion.destroy');

    
        // #################################calificacion meritos#################################
        Route::get('calificacion','CalificacionController@index')->name('calif.index');
        Route::get('califMerito_{user}','CalificacionController@create')->name('crearCalif.create');
        Route::post('calif_store_{user}','CalificacionController@store')->name('calif.store');
        Route::delete('calificacion_eliminar_{user}','CalificacionController@delete')->name('calif.delete');
        Route::put('calificacion_publicar_{user}','CalificacionController@publicar')->name('calif.publicar');
        Route::put('calif_quitar_{user}','CalificacionController@quitarPublicacion')->name('calif.quitar');

 
    });

    //#####################################recepcion de docummentos
    Route::group(['middleware' => 'permission:habilitado_inhabilitado'], function () {    
       //#######################  Habilitados ###############################
       Route::resource('habilitado_inhabilitado','ListaController@index');
       Route::get('documentosPresentar_{user}', 'ListaController@indexlab')->name('documentos.indexlab');
       Route::get('documentosPresentardoc_{user}','ListaController@indexdoce')->name('documentos.indexdoce');
       Route::put('habilitar_{user}','ListaController@habilitar')->name('documentos.habilitar');
       Route::put('documentosPublicar_{user}','ListaController@publicar')->name('documento.publicar');
       Route::put('sdocumentosQuitar_{user}','ListaController@quitar')->name('documento.quitar');
        
    });
    Route::group(['middleware' => 'permission:libro_recepcion'], function () {
        ################ Libro de recepcion ########
        Route::get('libro','RecepcionController@index')->name('libro.index');
        Route::get('crear_libro','RecepcionController@create')->name('libro.create');
        Route::post('libro_store','RecepcionController@store')->name('libro.store');
        Route::delete('libro_delete_{libro}','RecepcionController@destroy')->name('libro.delete');    
    });     
    
});

//####################################Generar Convocatoria########################
Route::get('generarConv_{call}', 'CallController@generarConvocatoriaLabo')->name('generarConv');//vista principal
Route::get('generarConvDoc_{call}', 'CallController@generarConvocatoriaDocencia')->name('generarConvDoc');

//######################ROTULO y POSTULANTE###################################
    Route::get('postulante_{user}_show','PostulantController@show')->name('postulante.show');
    Route::get('postulante_edit_{user}','PostulantController@edit')->name('postulante.edit');
    Route::put('postulante_{user}_update','PostulantController@update')->name('postulante.update');

Route::group(['middleware' => 'permission:estudiante'], function () {    
    // Route::resource('postulante','PostulantController');
    Route::get('primerPaso','PostulantController@primerPaso')->name('rotulo.primer');
    Route::get('segundoPaso','PostulantController@segundoPaso')->name('rotulo.segundo');
    Route::get('formularioPostulacion','PostulantController@index')->name('postulacion.form');
    Route::put('cancelar_postulacion_{user}','PostulantController@cancelarPostulacion')->name('cancelar.postulacion');
    Route::post('guardarRotulo','PostulantController@guardarRotulo')->name('rotulo.guardar');
    Route::get('calificacion_merito_{user}','CalificacionController@muestra')->name('calificacion.merito');
    Route::get('descripcionPostulante{user}','ListaController@describe')->name('descripcion.desc');
});
//################################################################
Route::get('reset_password','PostulantController@resetPassword')->name('reset.password');
Route::post('verificarPass', 'PostulantController@confirmarPassword')->name('confirmar.password');
Route::get('enviar_resetPassword','\App\Http\Controllers\Auth\ResetPasswordController@enviarReset_Password');
Route::post('recuperar','\App\Http\Controllers\Auth\ResetPasswordController@recuperar');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
//###################### Email ###################################
Route::get('sendEmail', 'MailController@send');
Route::get('vista', function () {
    return view('auth.mails.email');
});
Route::get('test', function () {
    return view('pruebaVerify');
});
Route::get('reset', function () {
    return view('auth.index_ResetPassword')->name("reset.password");
});
Route::get('/denied', ['as' => 'denied', function() {
    return view('errors.401');
}]);






