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
        	'edocivil_id'		=>  '1',
            'discapacidad_id'   =>  '1',
            'gradoeduc_id'      =>  '29',
            'parroquia_id'      =>  '1',
            'condlab_id'        =>  '2',
            'sector_id'         =>  '1',
        	'direccion'		    =>  'Av. Libertador Edif. El Tama',
        ]);

        App\User::create([
            'username'      => '27655842',
            'telf_hab'      => '0291',
            'telf_cel'      => '0424',
            'email'         => 'alexwestdo@gmail.co,',
            'fecha_ingreso' => '2002-02-12',
            'fecha_egreso' => NULL,
            'salario'       => '38.965,00',
            'password'      => '$2y$10$/2D8wR3mIgjo9FGOmFSb4OSr2/I/n7WP254SLC72U/3gQJ.kdbkPG',
            'persona_id'    => '1',
            'rol_id'        => '1',
        ]);

        App\Persona::create([
            'nombres'           =>  'Sandino',
            'apellidos'         =>  'Rodríguez',
            'cedula'            =>  '26997629',
            'nacimiento'        =>  '1998-04-10',
            'sexo'              =>  'M',
            'edocivil_id'       =>  '1',
            'discapacidad_id'   =>  '1',
            'gradoeduc_id'      =>  '29',
            'parroquia_id'      =>  '12',
            'condlab_id'        =>  '2',
            'sector_id'         =>  '1',
            'direccion'         =>  'Calle Ennio Gaudio  - Casa N° 72-95',
        ]);

        App\User::create([
            'username'      => '26997629',
            'telf_hab'      => '0291',
            'telf_cel'      => '0424',
            'email'         => 'sandino@gmail.co,',
            'fecha_ingreso' => '2002-01-10',
            'fecha_egreso' => NULL,
            'salario'       => '58.965,00',
            'password'      => '$2y$10$98P6vkiERIYB1DQ.RAljRO9Zx.jse4LSzxEtMmeG6YtZgA3J1us0i',
            'persona_id'    => '2',
            'rol_id'        => '2',
        ]);        
    }
}
