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
Auth::routes();

Route::get('index', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);//esto es por que al hacer click en el boton inicio nos lleva a /index
Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);



// Route::get('/', function () {
//        return redirect()->to('index');
// });

Route::get('administrador','HomeController@registrado');
Route::get('/home','HomeController@registrado');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('holi', 'CallController@getCalls');

Route::resource('postulante', 'usuarioController');
//call/create   
Route::resource('call', 'CallController');
//Para descargar las convocatorias
Route::get('calls/{file_name}', function ($file_name) {
        $file_path = public_path('convocatorias/'.$file_name);
        //echo (substr($file_name,10,strlen($file_name)-10));
        return response()->download($file_path);//cambiando 'download' por 'file' hacemos que solo se abra el archivo y no se descargue
    
     //abort(404);
});
Route::post('/verificar','LoginController@LoginUsuario');
Route::get('registrado', 'LoginController@registrado');
Route::get('/rotulo', 'UsersController@getUser');
Route::resource('/users', 'UsersController');

Route::get('areas','HomeController@areas');
Route::get('convocatoria','HomeController@convocatorias');
Route::get('roles','HomeController@roles');
Route::get('usuarios','HomeController@usuarios')->name('usuarios');
Route::get('usuarios_create','UsersController@create1')->name('create');
Route::post('usuarios_guardar','UsersController@store')->name('guardar');
Route::post('usuarios_delete/{id}',' UsersController@destroy');