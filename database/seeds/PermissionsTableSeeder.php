<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [ 'name' => 'view-access-management'],
            [ 'name' => 'list users' ],
            [ 'name' => 'create users' ],
            [ 'name' => 'edit users' ],
            [ 'name' => 'delete users' ],

            [ 'name' => 'list roles' ],
            [ 'name' => 'create roles' ],
            [ 'name' => 'edit roles' ],
            [ 'name' => 'delete roles' ],

            [ 'name' => 'list areas' ],
            [ 'name' => 'create areas' ],
            [ 'name' => 'edit areas' ],
            [ 'name' => 'delete areas' ],

            [ 'name' => 'list announcements' ],
            [ 'name' => 'create announcements' ],
            [ 'name' => 'edit announcements' ],
            [ 'name' => 'delete announcements' ],

            [ 'name' => 'list requirements' ],
            [ 'name' => 'create requirements' ],
            [ 'name' => 'edit requirements' ],
            [ 'name' => 'delete requirements' ],

            [ 'name' => 'list postulants' ],
            [ 'name' => 'create postulants' ],
            [ 'name' => 'edit postulants' ],
            [ 'name' => 'delete postulants' ],

            [ 'name' => 'list units' ],
            [ 'name' => 'create units' ],
            [ 'name' => 'edit units' ],
            [ 'name' => 'delete units' ],
        ];

        $rol_admin = Role::find(1);
        $rol_validator = Role::find(2);
        $rol_calificador = Role::find(3);
        $rol_postulante = Role::find(4);
        $rol_jefeDepartamento=Role::find(5);
        $rol_secretaria=Role::find(6);

        foreach ($permissions as $permission) {
            Permission::create($permission);
            $rol_admin->givePermissionTo($permission);
        }

        $rol_calificador->givePermissionTo([
            'view-access-management',
            'list postulants',
            'list announcements',
        ]);

        $rol_postulante->givePermissionTo([            
            'list announcements',//debemos crear otro permiso diferente
        ]);
        $rol_validator->givePermissionTo([
            'view-access-management',            
            'list announcements',
        ]);
        $rol_secretaria->givePermissionTo([
            'view-access-management',
            'list areas',
            'create areas',
            'edit areas',
            'delete areas',
            'list units',
            'create units',
            'edit units',
            'delete units',
            'list requirements',
            'create requirements',
            'edit requirements',
            'delete requirements',
            'list announcements',
            'create announcements',
            'edit announcements',
            'delete announcements',
        ]);
        $rol_jefeDepartamento->givePermissionTo([ 
            'view-access-management',           
            'list announcements',
        ]);    

    }
}



