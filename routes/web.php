
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

Route::get('welcome', 'LoginController@welcome' );

Route::resource('noregister', 'LoginController@noregister');
Route::resource('login', 'CallController@login');
Route::resource('/verificar','LoginController@LoginUsuario');
Route::get('logout', 'LoginController@logout');
Route::get('/admin','AdministradorController@welcome');
Route::resource('administrador', 'CallController@administrador');
Route::resource('postulante', 'CallController@postulante');

//call/create
Route::resource('call', 'CallController');
//Para descargar las convocatorias
Route::get('calls/{file_name}', function ($file_name) {
        $file_path = public_path('convocatorias/'.$file_name);
        //echo (substr($file_name,10,strlen($file_name)-10));
        return response()->download($file_path);//cambiando 'download' por 'file' hacemos que solo se abra el archivo y no se descargue
    
     //abort(404);
});
//users/create
Route::resource('users', 'usuarioController');

Route::get('jefeDep', 'usuarioController@regJefDep');
Route::get('director', 'usuarioController@regdirector');
Route::get('comision_merito', 'usuarioController@comMerito');

Route::get('comision_conocimiento', 'usuarioController@conocimiento');

Route::get('/register', [
    'as' => 'auth.register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
]);

Route::post('/register_store', [
    'as' => 'auth.register_store',
    'uses' => 'Auth\RegisterController@storeRegistration'
]);
Route::post('/verificar','LoginController@LoginUsuario');
Route::get('secretaria', 'usuarioController@secretaria');
Route::get('plantilla', 'CallController@plantilla');
Route::resource('log', 'CallController@log');
Route::resource('postulante', 'CallController@postulante');

Route::resource('registrado', 'CallController@registrado');
