<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //richi no te olvides actualizar el nombre de las columnas con user
        $user = new App\Usuario();
        $user->nombre = "User";
        $user->apellido = "Rolo";
        $user->email = "UserRolo@gmail.com";
        $user->carrera = "Sistemas";
        $user->NombreUsuario = "UserRolo";
        $user->password = "userrolo";
        $user->save();
    }
}
