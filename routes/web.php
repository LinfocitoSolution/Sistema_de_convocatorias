
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('registro_convocatoria', 'CallController@register');
Route::resource('noregister', 'CallController@noregister');
Route::resource('login', 'CallController@login');
Route::resource('formulariopost', 'CallController@formulariopost');
Route::get("/leer",function(){//ruta del modelo
   /* $articulos=App\Articulo::all();//namespace del modelo, importante
    foreach($articulos as $articulo)
    {
        echo "Nombre:  " .  $articulo->Nombre_Articulo . " <br> " . "precio: " . $articulo->Precio . "<br>";
    }*/
    $articulos=App\Articulo::where("Seccion","Ceramica")->min("precio");
    return $articulos;
});
Route::get("/insertar",function(){//ruta del modelo
    $articulos=new App\Articulo;
    $articulos->Nombre_Articulo="pantalones";
    $articulos->Precio="60";
    $articulos->Pais_origen="bolivia";
    $articulos->observaciones="lijado con lija";
    $articulos->seccion="confeccion";
   
    $articulos->save();
 });
 Route::get("/actualizar",function(){//ruta del modelo
    $articulos=App\Articulo::find(1240);
    $articulos->Nombre_Articulo="pantalones";
    $articulos->Precio="90";
    $articulos->Pais_origen="bolivia";
    $articulos->observaciones="lijado con lija";
    $articulos->seccion="confeccion";
   
    $articulos->save();
 });