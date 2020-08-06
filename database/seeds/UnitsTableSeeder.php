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
                'name' => 'Departamento de Informática y Sistemas',
                'description' => 'Ingenieria en sistemas,informatica',              
            ],
            [
                'name' => 'Departamento de Eléctrica y Electrónica',
                'description' => 'Ingenieria electronica,electrica',              
            ],
            [
                'name' => 'Departamento de Ingeniería Mecánica-Electromecánica',
                'description' => 'Ingenieria Mecánica,Electromecánica',              
            ],
            [
                'name' => 'Departamento de Industrias',
                'description' => 'Ingenieria Industrial',              
            ],
        ];
        foreach ($units as $unit) {
            Unidad::create($unit);
        }    
    }
}
