<?php

use Illuminate\Database\Seeder;
use App\Requerimiento;

class RequerimientosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $requerimientos = [
            [
                'cantidad_de_auxiliares' => '7',
                'cantidad_horas_academicas' => '80',              
                'nombre_auxiliatura' => 'Administrador de Laboratorio de Computo',
                'codigo_auxiliatura' => 'LCO-ADM',
                'tipo_requerimiento' => 'requerimiento de laboratorio',
            ],
            [
                'cantidad_de_auxiliares' => '2',
                'cantidad_horas_academicas' => '80',              
                'nombre_auxiliatura' => 'Administrador de Laboratorio de Desarrollo',
                'codigo_auxiliatura' => 'LDS-ADM',
                'tipo_requerimiento' => 'requerimiento de laboratorio',
            ],
            [
                'cantidad_de_auxiliares' => '2',
                'cantidad_horas_academicas' => '56',              
                'nombre_auxiliatura' => 'Auxiliar de Laboratorio de Desarrollo',
                'codigo_auxiliatura' => 'LDS-AUX',
                'tipo_requerimiento' => 'requerimiento de laboratorio',
            ],
            [
                'cantidad_de_auxiliares' => '1',
                'cantidad_horas_academicas' => '80',              
                'nombre_auxiliatura' => 'Administrador de Laboratorio de Mantenimiento de Software',
                'codigo_auxiliatura' => 'LM-ADM-SW',
                'tipo_requerimiento' => 'requerimiento de laboratorio',
            ],
            [
                'cantidad_de_auxiliares' => '4',
                'cantidad_horas_academicas' => '32',              
                'nombre_auxiliatura' => 'Auxiliar de Laboratorio de Mantenimiento de Software',
                'codigo_auxiliatura' => 'LM–AUX–SW',
                'tipo_requerimiento' => 'requerimiento de laboratorio',
            ],
            [
                'cantidad_de_auxiliares' => '1',
                'cantidad_horas_academicas' => '80',              
                'nombre_auxiliatura' => 'Administrador de Laboratorio de Mantenimiento de Hardware',
                'codigo_auxiliatura' => 'LM-ADM-HW',
                'tipo_requerimiento' => 'requerimiento de laboratorio',
            ],
            [
                'cantidad_de_auxiliares' => '4',
                'cantidad_horas_academicas' => '32',              
                'nombre_auxiliatura' => 'Auxiliar de Laboratorio de Mantenimiento de Hardware',
                'codigo_auxiliatura' => 'LM-AUX-HW',
                'tipo_requerimiento' => 'requerimiento de laboratorio',
            ],
            [
                'cantidad_de_auxiliares' => '1',
                'cantidad_horas_academicas' => '80',              
                'nombre_auxiliatura' => 'Auxiliar de Terminal de Laboratorio de  Computo',
                'codigo_auxiliatura' => 'LDS-ATL',
                'tipo_requerimiento' => 'requerimiento de laboratorio',
            ],
            [
                'cantidad_de_auxiliares' => '9',
                'cantidad_horas_academicas' => '8',              
                'nombre_auxiliatura' => 'Introduccion a la Programacion ',
                'codigo_auxiliatura' => '123-IP',
                'tipo_requerimiento' => 'requerimiento de docencia',
            ],
            [
                'cantidad_de_auxiliares' => '4',
                'cantidad_horas_academicas' => '8',              
                'nombre_auxiliatura' => 'Elementos de Programacion y Estructura de Datos',
                'codigo_auxiliatura' => '123-EPED',
                'tipo_requerimiento' => 'requerimiento de docencia',
            ],
            [
                'cantidad_de_auxiliares' => '1',
                'cantidad_horas_academicas' => '8',              
                'nombre_auxiliatura' => 'Teoria de Grafos',
                'codigo_auxiliatura' => '123-TG',
                'tipo_requerimiento' => 'requerimiento de docencia',
            ],
            [
                'cantidad_de_auxiliares' => '2',
                'cantidad_horas_academicas' => '8',              
                'nombre_auxiliatura' => 'Computacion I',
                'codigo_auxiliatura' => '123-CI',
                'tipo_requerimiento' => 'requerimiento de docencia',
            ],
        ];
        foreach ($requerimientos as $requerimiento) {
            Requerimiento::create($requerimiento);
        } 
    }
}
