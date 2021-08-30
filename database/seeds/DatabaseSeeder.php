<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(MunicipiosTableSeeder::class);
        $this->call(EdoCivilTableSeeder::class);
        $this->call(DiscapacidadesTableSeeder::class);
        $this->call(NivelesEducTableSeeder::class);
        $this->call(GradosEducTableSeeder::class);
        $this->call(CondicionLaboralTableSeeder::class);
        $this->call(SectorTableSeeder::class);
        $this->call(ParroquiasTableSeeder::class);
        $this->call(DocumentosTableSeeder::class);
        $this->call(EstatusTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);

    }
}
