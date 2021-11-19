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
            'sueldo'        =>  '50000000.00',
            'sueldoEscrito' =>  'Cincuenta millones de Bolívares con cero céntimos',
        ]);

        App\Role::create([
        	'dsc'		    =>  'Gerente de R.R.H.H.',
            'sueldo'        =>  '40000000.00',
            'sueldoEscrito' =>  'Cuarenta millones de Bolívares con cero céntimos',
        ]);

        App\Role::create([
        	'dsc'		    =>  'Personal',
            'sueldo'        =>  '30000000.00',
            'sueldoEscrito' =>  'Treinta millones de Bolívares con cero céntimos',
        ]);
    }
}
