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
            [ 'name' => 'panel de datos'],
            [ 'name' => 'admin_usuarios' ],     
            [ 'name' => 'admin_roles' ],
            [ 'name' => 'estudiante' ],
            [ 'name' => 'responsable de convocatorias' ],
            [ 'name' => 'comision conocimientos' ],
            [ 'name' => 'comision meritos' ],                   
            [ 'name' => 'habilitado_inhabilitado' ],       
            [ 'name' => 'libro_recepcion' ],       
        ];

        $rol_admin = Role::find(1);
        $rol_meritos = Role::find(2);
        $rol_conocimientos = Role::find(3);
        $rol_postulante = Role::find(4);
        $rol_jefeDepartamento=Role::find(5);
        $rol_secretaria=Role::find(6);

        foreach ($permissions as $permission) {
            Permission::create($permission);
            $rol_admin->givePermissionTo($permission);
        }

        $rol_conocimientos->givePermissionTo([
            'panel de datos',
            'comision conocimientos',
        ]);

        $rol_postulante->givePermissionTo([            
            'estudiante',
        ]);
        $rol_meritos->givePermissionTo([
            'panel de datos',
            'comision meritos',
            'habilitado_inhabilitado',
        ]);
        $rol_secretaria->givePermissionTo([
            'panel de datos',
            'libro_recepcion',
        ]);
        $rol_jefeDepartamento->givePermissionTo([ 
            'panel de datos',
            'responsable de convocatorias',
            'comision meritos',    
            'admin_usuarios',
            'admin_roles',
            'comision conocimientos',
        ]);    

    }
}

