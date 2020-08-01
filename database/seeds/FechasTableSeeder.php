<?php

use Illuminate\Database\Seeder;
use App\fecha;

class FechasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fechas = [
            [
                'evento' => 'convocatoria',
                'fechaI' => '2020-07-11 20:01:00',
                'fechaF' => '2021-07-20 17:01:00',              
                'ubicacion' => 'Facultad de Ciencias y Tecnologia UMSS',                
            ],
            [
                'evento' => 'Publicacion de Convocatoria',
                'fechaI' => '2020-07-20 17:12:00',
                'fechaF' => '2021-07-11 17:12:00',              
                'ubicacion' => '',                
            ],
            [
                'evento' => 'Presentacion de Documentos',
                'fechaI' => '2020-08-03 08:15:00',
                'fechaF' => '2020-08-05 17:45:00',              
                'ubicacion' => 'Laboratorios de informatica sistemas',                
            ],
            [
                'evento' => 'publicacion de habilitados',
                'fechaI' => '2020-08-20 08:15:00',
                'fechaF' => '2020-08-20 18:45:00',              
                'ubicacion' => 'en laboratorio de informatica sistemas',                
            ],
            [
                'evento' => 'reclamos',
                'fechaI' => '2020-08-21 08:15:00',
                'fechaF' => '2020-08-21 18:45:00',              
                'ubicacion' => 'en laboratorio informatica sistemas',                
            ],
            [
                'evento' => 'publicacion de pruebas practicas y de conocimientos',
                'fechaI' => '2020-08-25 08:15:00',
                'fechaF' => '2020-08-31 17:15:00',              
                'ubicacion' => 'en laboratorio informatica sistemas',                
            ],
            [
                'evento' => 'publicacion de resultados',
                'fechaI' => '2020-09-01 08:15:00',
                'fechaF' => '2020-09-03 18:45:00',              
                'ubicacion' => 'en laboratorios de informatica sistemas',                
            ],       
      
        ];
        foreach ($fechas as $fecha) {
            fecha::create($fecha);
        }         
    }
}
