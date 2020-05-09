<?php
use App\Convocatoria;
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
    $convocatorias = Convocatoria::all();
    return view('index', compact('convocatorias'));
    //   return redirect()->to('index');
});
Route::get('administrador','HomeController@registrado');
//Route::get('/home','HomeController@registrado');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

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
