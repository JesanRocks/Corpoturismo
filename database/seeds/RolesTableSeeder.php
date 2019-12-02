<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Role::create([
        	'dsc'		    =>  'Administrador',
        ]);

        App\Role::create([
        	'dsc'		    =>  'Gerente de R.R.H.H.',
        ]);

        App\Role::create([
        	'dsc'		    =>  'Gerente de Proyectos',
        ]);

        App\Role::create([
        	'dsc'		    =>  'Personal',
        ]);
    }
}
