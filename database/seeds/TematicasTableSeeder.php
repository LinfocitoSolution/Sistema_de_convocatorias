<?php

use Illuminate\Database\Seeder;
use App\Tematica;
class TematicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tematicas = [
            [
                'name' => 'ADM LINUX',                              
            ],
            [
                'name' => 'REDES NIVEL INTERMEDIO',                              
            ],
            [
                'name' => 'POSTGRES, MYSQL NIVEL INTERMEDIO',                
            ],
            [
                'name' => 'PROGRAMACION PARA INTERNET, LENGUAJES DE PROGRAMACION (JSP, JAVASCRIPT, CSS, HTML, PHP, DELPHI)',                
            ],
            [
                'name' => 'MODELAJE DE APLICACIONES WEB (UML),PROCESO UNIFICADO ESTRUCTURADO',                
            ],
            [
                'name' => 'ENSAMBLAJE Y MANTENIMIENTO DE COMPUTADORA EN HARDWARE Y SOFTWARE',                
            ],
            [
                'name' => 'ELECTRÓNICA APLICADA-Teórico',                
            ],
            [
                'name' => 'ELECTRÓNICA APLICADA-Practico',                
            ],
            [
                'name' => 'DIDÁCTICA',                
            ],
        ];
        foreach ($tematicas as $tematica) {
            Tematica::create($tematica);
        }  
    }
}
