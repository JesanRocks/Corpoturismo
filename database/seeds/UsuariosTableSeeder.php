<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Persona::create([
        	'nombres'		    =>  'Alex',
        	'apellidos'		    =>  'Westphal',
        	'cedula'		    =>  '27655842',
        	'nacimiento'		=>  '1998-04-17',
        	'sexo'		    	=>  'M',
        	'parroquia_id'		=>  '1',
        	'direccion'		    =>  'Maturín',
        ]);

        App\User::create([
        	'username'		    =>  '27655842',
        	'password'		=>  '$2y$10$/2D8wR3mIgjo9FGOmFSb4OSr2/I/n7WP254SLC72U/3gQJ.kdbkPG',
        	'rol_id'		    =>  '1',
        	'persona_id'		=>  '1',
        ]);
    }
}
