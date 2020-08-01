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


            [ 'name' => 'list tablaConocimientos' ],
            [ 'name' => 'create tablaConocimientos' ],
            [ 'name' => 'edit tablaConocimientos' ],
            [ 'name' => 'delete tablaConocimientos' ],    

            [ 'name' => 'list fechas' ],
            [ 'name' => 'create fechas' ],
            [ 'name' => 'edit fechas' ],
            [ 'name' => 'delete fechas' ],
            
            [ 'name' => 'list meritos' ],
            [ 'name' => 'primer_paso meritos' ],
            [ 'name' => 'create meritos' ],
            [ 'name' => 'create submeritos' ],
            [ 'name' => 'delete meritos' ],
            [ 'name' => 'list submerito' ],
            [ 'name' => 'delete submerito' ],
            [ 'name' => 'descripcion submerito' ],
            [ 'name' => 'create descripcion_submerito' ],
            [ 'name' => 'delete descripcion_submerito' ],

            [ 'name' => 'lits calificacion_meritos' ],
            [ 'name' => 'create calificacion_meritos' ],
            [ 'name' => 'delete calificacion_meritos' ],
            [ 'name' => 'publicar calificacion_meritos' ],
            [ 'name' => 'quitar calificacion_meritos' ],
            [ 'name' => 'calificacion_meritos' ],   
            [ 'name' => 'notaFinal' ],


            [ 'name' => 'list books' ],
            [ 'name' => 'create books' ],   
            [ 'name' => 'delete books' ],
            [ 'name' => 'list tematics' ],
            [ 'name' => 'create tematics' ],
            [ 'name' => 'call tematics' ],   
            [ 'name' => 'call unit_tematics' ],
            [ 'name' => 'delete tematics' ],
            
            
            
#######################  Habilitados ###############################
            [ 'name' => 'list habilitado' ],
            [ 'name' => 'documentos_indexlab habilitado' ],
            [ 'name' => 'documentos_indexdoce habilitado' ],
            [ 'name' => 'documentos_habilitar habilitado' ],
            [ 'name' => 'documentos_publicar habilitado' ],
            [ 'name' => 'documento_quitar habilitado' ],
            [ 'name' => 'descripcion habilitado' ],

################ TABLA CALIF ############################################
            [ 'name' => 'calfi_primero tablaCalif' ],
            [ 'name' => 'calfi_segundo tablaCalif' ],
            [ 'name' => 'list_postulantes tablaCalif' ],
            [ 'name' => 'calificar_postulantes tablaCalif' ],
            [ 'name' => 'calificar_postlanteDoc tablaCalif' ],
            [ 'name' => 'registrar_notas tablaCalif' ],
            [ 'name' => 'registrar_tabla tablaCalif' ],
            [ 'name' => 'registrar_notasDoc tablaCalif' ],
            [ 'name' => 'delete tabla tablaCalif' ],
            [ 'name' => 'delete nota tablaCalif' ],


            
//######################ROTULO y POSTULANTE###################################
            [ 'name' => 'show_postulante rotulopostulante' ],
            [ 'name' => 'edit_postulante rotulopostulante' ],
            [ 'name' => 'postulante_update rotulopostulante' ],
            [ 'name' => 'primer_rotulo rotulopostulante' ],
            [ 'name' => 'segundo_rotulo rotulopostulante' ],
            [ 'name' => 'formulario_postulacion rotulopostulante' ],
            [ 'name' => 'cancelar_postulacion rotulopostulante' ],
            [ 'name' => 'rotulo_guardar rotulopostulante' ],
            
            // [ 'name' => '' ],
            [ 'name' => 'rotulo_postulante' ],            
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
            'rotulo_postulante',
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

