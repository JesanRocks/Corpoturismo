<?php

use Illuminate\Database\Seeder;

class DocumentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Documento::create([
        	'dsc' =>  'Constancia de trabajo',
        ]);
        
        App\Documento::create([
        	'dsc' =>  'Solicitud de vacaciones',
        ]);

        App\Documento::create([
        	'dsc' =>  'Solicitud de permisos',
        ]);
    }
}