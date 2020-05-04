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
                'name' => 'calificador',
                'lastname' => 'calificador',
                'email' => 'calificador@gmail.com',                
                'career' => 'Informatica',
                'username' => 'calificador',                
                'password' => bcrypt('calificador'),
                'remember_token' => '',                
            ],
            [
                'name' => 'postulante',
                'lastname' => 'postulante',
                'email' => 'postulante@gmail.com',
                'career' => 'Informatica',
                'username' => 'postulante',                            
                'password' => bcrypt('postulante'),
                'remember_token' => '',
            ],
        ];

        foreach ($users as $item) {
            $user = User::create($item);

            if ($user->name == 'Administrator') {
                $user->assignRole(['Admin']);
            } elseif ($user->name == 'calificador') {
                $user->assignRole(['Calificador']);
            } else {
                $user->assignRole(['Postulante']);
            }
        }
    }
}
