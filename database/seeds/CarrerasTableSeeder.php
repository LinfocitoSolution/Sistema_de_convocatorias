<?php

use Illuminate\Database\Seeder;
use App\Carrera;

class CarrerasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carreras = [
            [
                'name' => 'Ing. Sitemas',//1
            ],
            [
                'name' => 'Ing. Electronica',//2
            ],
            [
                'name' => 'Ing. Industrial',//3
            ],
            [
                'name' => 'Ing. Informatica',//4
            ],
            [
                'name' => 'Ing. Mecanica',//5
            ],
            [
                'name' => 'Ing. Electromecanica',//6
            ]
        ];

        foreach ($carreras as $carrera) {
            Carrera::create($carrera);
        }
    }
}
