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
Route::get('usuarios','UserController@index')->name('usuarios');
Route::get('usuarios_create','UserController@create')->name('usuarios.create');
Route::post('usuarios_guardar','UserController@store')->name('usuarios.guardar');
Route::get('usuarios_editar/{user}','UserController@edit')->name('usuarios.edit');
Route::put('usuarios_update/{user}','UserController@update')->name('usuarios.update');
Route::delete('usuarios_delete/{user}','UserController@destroy')->name('usuarios.destroy');



Route::get('holi', 'CallController@getCalls');


//call/create   
Route::resource('call', 'CallController');
//Para descargar las convocatorias
Route::get('calls/{file_name}', function ($file_name) {
        $file_path = public_path('convocatorias/'.$file_name);
        //echo (substr($file_name,10,strlen($file_name)-10));
        return response()->download($file_path);//cambiando 'download' por 'file' hacemos que solo se abra el archivo y no se descargue
    
     //abort(404);
});




Route::get('/rotulo', 'UsersController@getUser');


Route::get('areas','HomeController@areas');
Route::get('convocatoria','HomeController@convocatorias');
Route::get('create','RoleController@create');

Route::get('roles', [
    'as' => 'roles.index',
    'uses' => 'RoleController@index',
]);
Route::get('roles/{rol}/edit', [
    'as' => 'roles.edit',
    'uses' => 'RoleController@edit',
]);
Route::delete('roles/{rol}', [
    'as' => 'roles.destroy',
    'uses' => 'RoleController@destroy',
]);
Route::post('roles/store', [
    'as' => 'roles.store',
    'uses' => 'RoleController@store',
]);



