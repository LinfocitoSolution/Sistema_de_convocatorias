<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(CarrerasTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(convocatoriasTableSeeder::class);
        $this->call(FechasTableSeeder::class);                                   
        $this->call(Convocatoria_fechaTableSeeder::class);                             
        $this->call(RequerimientosTableSeeder::class);
        // $this->call(Convocatoria_requerimientoTableSeeder::class); //No quiere dar               
    }
}
