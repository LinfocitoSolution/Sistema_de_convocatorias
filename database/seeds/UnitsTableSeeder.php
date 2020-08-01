<?php

use Illuminate\Database\Seeder;
use App\Unidad;
class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
            [
                'name' => 'Departamento de Ingenieria de Sistemas',
                'description' => 'ingenieria en sistemas',              
            ],
            [
                'name' => 'Departamento de Ingenieria de Informatica',
                'description' => 'ingenieria de informatica',              
            ],
            [
                'name' => 'Departamento de Ingenieria Electronica',
                'description' => 'ingenieria electronica',              
            ],
        ];
        foreach ($units as $unit) {
            Unidad::create($unit);
        }    
    }
}
