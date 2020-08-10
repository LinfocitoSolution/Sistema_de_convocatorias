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

            
            [ 'name' => 'admin_users' ],
            // [ 'name' => 'list users' ],
            // [ 'name' => 'create users' ],
            // [ 'name' => 'edit users' ],
            // [ 'name' => 'delete users' ],
                        
            [ 'name' => 'admin_roles' ],
            // [ 'name' => 'delete users' ],
            // [ 'name' => 'list roles' ],
            // [ 'name' => 'create roles' ],
            // [ 'name' => 'edit roles' ],
            // [ 'name' => 'delete roles' ],

            // [ 'name' => 'list areas' ],
            // [ 'name' => 'create areas' ],
            // [ 'name' => 'edit areas' ],
            // [ 'name' => 'delete areas' ],

//             [ 'name' => 'list announcements' ],
//             [ 'name' => 'create announcements_lab' ],
//             [ 'name' => 'create announcements_doc' ],
//             [ 'name' => 'edit announcements' ],
//             [ 'name' => 'delete announcements' ],

//             [ 'name' => 'list requirements' ],
//             [ 'name' => 'create requirements' ],
//             [ 'name' => 'edit requirements' ],
//             [ 'name' => 'delete requirements' ],

//             [ 'name' => 'list postulants' ],
//             [ 'name' => 'create postulants' ],
//             [ 'name' => 'edit postulants' ],
//             [ 'name' => 'delete postulants' ],

//             [ 'name' => 'list units' ],
//             [ 'name' => 'create units' ],
//             [ 'name' => 'edit units' ],
//             [ 'name' => 'delete units' ],


//             [ 'name' => 'list tablaConocimientos' ],
//             [ 'name' => 'create tablaConocimientos' ],
//             [ 'name' => 'edit tablaConocimientos' ],
//             [ 'name' => 'delete tablaConocimientos' ],    

//             [ 'name' => 'list fechas' ],
//             [ 'name' => 'create fechas' ],
//             [ 'name' => 'edit fechas' ],
//             [ 'name' => 'delete fechas' ],
            
//             [ 'name' => 'list meritos' ],
//             [ 'name' => 'primer_paso meritos' ],
//             [ 'name' => 'create meritos' ],
//             [ 'name' => 'create submeritos' ],
//             [ 'name' => 'delete meritos' ],
//             [ 'name' => 'list submerito' ],
//             [ 'name' => 'delete submerito' ],
//             [ 'name' => 'descripcion submerito' ],
//             [ 'name' => 'create descripcion_submerito' ],
//             [ 'name' => 'delete descripcion_submerito' ],

//             [ 'name' => 'lits calificacion_meritos' ],
//             [ 'name' => 'create calificacion_meritos' ],
//             [ 'name' => 'delete calificacion_meritos' ],
//             [ 'name' => 'publicar calificacion_meritos' ],
//             [ 'name' => 'quitar calificacion_meritos' ],
//             [ 'name' => 'calificacion_meritos' ],   
//             [ 'name' => 'notaFinal' ],


//             [ 'name' => 'list books' ],
//             [ 'name' => 'create books' ],   
//             [ 'name' => 'delete books' ],
//             [ 'name' => 'list tematics' ],
//             [ 'name' => 'create tematics' ],
//             [ 'name' => 'call tematics' ],   
//             [ 'name' => 'call unit_tematics' ],
//             [ 'name' => 'delete tematics' ],
            
            
            
// #######################  Habilitados ###############################
//             [ 'name' => 'list habilitado' ],
//             [ 'name' => 'documentos_indexlab habilitado' ],
//             [ 'name' => 'documentos_indexdoce habilitado' ],
//             [ 'name' => 'documentos_habilitar habilitado' ],
//             [ 'name' => 'documentos_publicar habilitado' ],
//             [ 'name' => 'documento_quitar habilitado' ],
//             [ 'name' => 'descripcion habilitado' ],

// ################ TABLA CALIF ############################################
//             [ 'name' => 'calfi_primero tablaCalif' ],
//             [ 'name' => 'calfi_segundo tablaCalif' ],
//             [ 'name' => 'list_postulantes tablaCalif' ],
//             [ 'name' => 'calificar_postulantes tablaCalif' ],
//             [ 'name' => 'calificar_postlanteDoc tablaCalif' ],
//             [ 'name' => 'registrar_notas tablaCalif' ],
//             [ 'name' => 'registrar_tabla tablaCalif' ],
//             [ 'name' => 'registrar_notasDoc tablaCalif' ],
//             [ 'name' => 'delete tabla tablaCalif' ],
//             [ 'name' => 'delete nota tablaCalif' ],
//             [ 'name' => 'conocimiento_publicar tablaCalif' ],
//             [ 'name' => 'conocimiento_quitar tablaCalif' ],                   


            
// //######################ROTULO y POSTULANTE###################################
//             [ 'name' => 'show_postulante rotulopostulante' ],
//             [ 'name' => 'edit_postulante rotulopostulante' ],
//             [ 'name' => 'postulante_update rotulopostulante' ],
//             [ 'name' => 'primer_rotulo rotulopostulante' ],
//             [ 'name' => 'segundo_rotulo rotulopostulante' ],
//             [ 'name' => 'formulario_postulacion rotulopostulante' ],
//             [ 'name' => 'cancelar_postulacion rotulopostulante' ],
//             [ 'name' => 'rotulo_guardar rotulopostulante' ],
            
            // [ 'name' => '' ],
            [ 'name' => 'postulante' ],
            [ 'name' => 'responsable de convocarorias' ],
            [ 'name' => 'comision conocimientos' ],
            [ 'name' => 'comision meritos' ],       
            [ 'name' => 'recepcion de documentos' ],
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
            'view-access-management',
            'comision conocimientos',
            // 'list postulants',
            // 'calfi_primero tablaCalif',
            // 'list tablaConocimientos',
            // 'list_postulantes tablaCalif',
            // 'list habilitado',
        ]);

        $rol_postulante->givePermissionTo([            
            'postulante',
            // 'calificacion_meritos',
            // 'descripcion habilitado',


        ]);
        $rol_meritos->givePermissionTo([
            'view-access-management',
            'comision meritos',
            'recepcion de documentos',
            // 'primer_paso meritos',
            // 'list meritos',
            // 'lits calificacion_meritos',
            // 'list habilitado',


        ]);
        $rol_secretaria->givePermissionTo([
            'view-access-management',
            // 'recepcion de documentos',
            // // 'list areas',
            // // 'create areas',
            // // 'edit areas',
            // // 'delete areas',
            // // 'list units',
            // // 'create units',
            // // 'edit units',
            // // 'delete units',
            // // 'list requirements',
            // // 'create requirements',
            // // 'edit requirements',
            // // 'delete requirements',
            // // 'list announcements',
            // // 'create announcements',
            // // 'edit announcements',
            // // 'delete announcements',
            // //'create meritos',
            // 'create books',
            // 'list books',            
            // 'delete books',
        ]);
        $rol_jefeDepartamento->givePermissionTo([ 
            'view-access-management',
            'responsable de convocarorias',
            'comision meritos',    
            'admin_users',
            'admin_roles',
            'comision conocimientos',
            // 'notaFinal',
            // 'create announcements_lab',
            // 'create announcements_doc',
            // 'list announcements',
            // 'list areas',
            // 'create areas',

            // 'list units',
            // 'create units',

            // 'create requirements',
            // 'list requirements',

            // 'create fechas',
            // 'list fechas',

            // 'call unit_tematics',
            // 'list tematics',
            
            // 'list habilitado',
        ]);    

    }
}

