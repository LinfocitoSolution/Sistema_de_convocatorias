<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $users = [
            [
                'name' => 'Administrator',
                'lastname' => 'Admin',
                'email' => 'admin@gmail.com',
                'career' => 'Sistemas',
                'username' => 'Admin',                
                'password' => bcrypt('admin'),
                'remember_token' => '',                
            ],
            [
                'name' => 'Calificador',
                'lastname' => 'Calificador',
                'email' => 'calificador@gmail.com',                
                'career' => 'Informatica',
                'username' => 'calificador',                
                'password' => bcrypt('calificador'),
                'remember_token' => '',                
            ],
            [
                'name' => 'Postulante',
                'lastname' => 'Postulante',
                'email' => 'postulante@gmail.com',
                'career' => 'Informatica',
                'username' => 'postulante',                            
                'password' => bcrypt('postulante'),
                'remember_token' => '',
            ],

            [
                'name' => 'Secretaria',
                'lastname' => 'Secretaria',
                'email' => 'secretaria@gmail.com',
                'career' => 'secretaria',
                'username' => 'secretaria',                            
                'password' => bcrypt('secretaria'),
                'remember_token' => '',
            ],

            [
                'name' => 'Jefe Departamento',
                'lastname' => 'Jefe Departamento',
                'email' => 'jefedepartamento@gmail.com',
                'career' => 'Informatica',
                'username' => 'jefedepartamento',                            
                'password' => bcrypt('jefedepartamento'),
                'remember_token' => '',
            ],

            [
                'name' => 'Validador',
                'lastname' => 'Validador',
                'email' => 'validador@gmail.com',
                'career' => 'Informatica',
                'username' => 'validador',                            
                'password' => bcrypt('validador'),
                'remember_token' => '',
            ],


        ];
        foreach ($users as $item) {
            $user = User::create($item);
            if ($user->name == 'Administrator') {
                $user->assignRole(['Admin']);
            }
            else{
                if ($user->name == 'Validador'){
                    $user->assignRole(['Validador']);
                } else {
                    if($user->name == 'Calificador'){
                        $user->assignRole(['Calificador']);
                    }
                    else{
                        if($user->name == 'Postulante'){
                            $user->assignRole(['Postulante']);
                        }
                        else{
                            if($user->name == 'Jefe Departamento'){
                                $user->assignRole(['Jefe Departamento']);
                            }  
                            else{
                                if($user->name == 'Secretaria'){
                                    $user->assignRole(['Secretaria']);
                                }                                
                            }
                        }
                    }
                }        
            }            
        }
    }
}
