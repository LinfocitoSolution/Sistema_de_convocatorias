<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'Admin',//1
            ],
            [
                'name' => 'Meritos',//2
            ],
            [
                'name' => 'Conocimientos',//3
            ],
            [
                'name' => 'Postulante',//4
            ],
            [
                'name' => 'Jefe Departamento',//5
            ],
            [
                'name' => 'Secretaria',//6
            ]
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}


