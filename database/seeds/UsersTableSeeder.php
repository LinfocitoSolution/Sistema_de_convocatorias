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
                'username' => 'Admin',                
                'password' => bcrypt('J@5qK6?b$a'),
                'remember_token' => '',                
            ],
            [
                'name' => 'Conocimientos',
                'lastname' => 'Conocimientos',
                'email' => 'conocimientos@gmail.com',                                
                'username' => 'conocimientos',                
                'password' => bcrypt('J@5qK6?b$c'),
                'remember_token' => '',                
            ],
            [
                'name' => 'Postulante',
                'lastname' => 'Postulante',
                'email' => 'postulante@gmail.com',
                'carrera_id' => 1,
                'direction'=>'Avenida Melchor Perez',
                'telephone'=>'79869786',
                'username' => 'postulante',                            
                'password' => bcrypt('J@5qK6?b$p'),
                'remember_token' => '',
            ],

            [
                'name' => 'Secretaria',
                'lastname' => 'Secretaria',
                'email' => 'secretaria@gmail.com',                
                'username' => 'secretaria',                            
                'password' => bcrypt('J@5qK6?b$s'),
                'remember_token' => '',
            ],

            [
                'name' => 'Jefe Departamento',
                'lastname' => 'Jefe Departamento',
                'email' => 'jefedepartamento@gmail.com',                
                'username' => 'jefedepartamento',                            
                'password' => bcrypt('J@5qK6?b$r'),
                'remember_token' => '',
            ],

            [
                'name' => 'Meritos',
                'lastname' => 'Meritos',
                'email' => 'meritos@gmail.com',                
                'username' => 'meritos',                            
                'password' => bcrypt('J@5qK6?b$m'),
                'remember_token' => '',
            ],


        ];
        foreach ($users as $item) {
            $user = User::create($item);
            if ($user->name == 'Administrator') {
                $user->assignRole(['Admin']);
            }
            else{
                if ($user->name == 'Meritos'){
                    $user->assignRole(['Meritos']);
                } else {
                    if($user->name == 'Conocimientos'){
                        $user->assignRole(['Conocimientos']);
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
