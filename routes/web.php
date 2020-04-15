
<?php
use App\articulo;
use App\Cliente ;

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
    $articulos=App\Articulo::where("id","4")->get();
    return $articulos;
   
   /* $articulos = App\Articulo::withTrashed()
                ->where('id', 4)
                ->get();
                return $articulos;*/
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
 Route::get("/actualizar",function()
 {//ruta del modelo
    /*$articulos=App\Articulo::find(1240);
    $articulos->Nombre_Articulo="pantalones";
    $articulos->Precio="90";
    $articulos->Pais_origen="bolivia";                  //actualizacion de datos 
    $articulos->observaciones="lijado con lija";
    $articulos->seccion="confeccion";
   
    $articulos->save();*/


    App\Articulo::where("Seccion","confeccion")->where("pais_origen","bolivia")->update(["precio"=>'500']);//actualizacion rapida en base a criterio
 });
 Route::get("/borrar",function()
 {
    /* $articulos=App\Articulo::find(1);
     $articulos->delete();*/
    App\Articulo::where("seccion","ferreteria")->delete();
 });
 route::get("/insercion",function()
 {

    App\Articulo::create (["Nombre_Articulo"=>"impresora","Precio"=>50,"Pais_Origen"=>"colombia", "Observaciones"=>"esta chido","Seccion"=>"informatica"]);
 });
 route::get("/softdelete",function()
 {
     App\Articulo::find(4)->delete();
 });
 route::get("/recuperar",function()
 {
    App\Articulo::withTrashed()
        ->where('id', 4)
        ->restore();
 });
 route::get("/matar",function()
 {
    $articulos=App\Articulo::withTrashed()
        ->where('id', 4)
        ->forceDelete();
 });
 route::get("/cliente/{id}/articulo",function($id)
{
    return Cliente::find($id)->articulo;
});
route::get("/articulo/{id}/cliente",function($id)
{
    return Articulo::find($id)->cliente->Nombre;
});
route::get("/articulos",function()
{
$articulos = Cliente::find(3)->articulos->where("Pais_Origen","quillacollo");

    foreach ($articulos as $articulo) 
    {
        echo $articulo->Nombre_Articulo . "<br>";
    }


});
Route::get("/cliente/{id}/perfil", function($id)
{
    $cliente=Cliente::find($id);
    foreach($cliente->perfils as $perfil)
    {
        return $perfil->nombre;
    }
});