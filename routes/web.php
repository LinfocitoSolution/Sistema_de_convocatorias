
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

Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::get('/home','LoginController@registrado');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');








Route::get('admin','rolesController@adminV');


Route::resource('postulante', 'UsuarioController@create');

//call/create
Route::resource('call', 'CallController');
//Para descargar las convocatorias
Route::get('calls/{file_name}', function ($file_name) {
        $file_path = public_path('convocatorias/'.$file_name);
        //echo (substr($file_name,10,strlen($file_name)-10));
        return response()->download($file_path);//cambiando 'download' por 'file' hacemos que solo se abra el archivo y no se descargue
    
     //abort(404);
});
//users/create##########Richard users no se implentara, registrar postulante esta
Route::resource('users', 'usuarioController');
//Permite el registro de un postulante
Route::resource('registro_postulante', 'usuarioController@create');

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


Route::get('registrado', 'LoginController@registrado');



Route::get('vistaadmi', function () {
    // return view('admin.administrador');
    //  return view('logins.login');
    //   return view('layouts.index');
    return view('calls.registrado');

});
Route::get('/rotulo', 'UsersController@getUser');
