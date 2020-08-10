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
                'name' => 'Departamento de Sistemas',
                'description' => 'Ingenieria de sistemas',              
            ],
        ];
        foreach ($units as $unit) {
            Unidad::create($unit);
        }    
    }
}
