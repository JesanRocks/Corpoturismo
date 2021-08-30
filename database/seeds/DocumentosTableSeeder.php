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
//Obligatorio
        App\Documento::create([
            'dsc' =>  'Permiso "Matrimonio"',
        ]);

        App\Documento::create([
            'dsc' =>  'Permiso "Fallecimiento familiar"',
        ]);
        
        App\Documento::create([
            'dsc' =>  'Permiso "Consultas medicas"',
        ]);

        App\Documento::create([
            'dsc' =>  'Permiso "Examenes medicos"',
        ]);
        App\Documento::create([
            'dsc' =>  'Permiso "Comparecencia ante la autoridad"',
        ]);        

        App\Documento::create([
            'dsc' =>  'Permiso "Licencia de paternidad"',
        ]);        

        App\Documento::create([
            'dsc' =>  'Permiso "Prenatal"',
        ]);        

        App\Documento::create([
            'dsc' =>  'Permiso "Postnatal"',
        ]);        

        App\Documento::create([
            'dsc' =>  'Permiso "Lactancia"',
        ]);        
//Potestativos
        App\Documento::create([
            'dsc' =>  'Permiso "Asistencia a seminarios, conferencias o congresos"',
        ]);        

        App\Documento::create([
            'dsc' =>  'Permiso "Beca"',
        ]);        

        App\Documento::create([
            'dsc' =>  'Permiso "Enfermedad de familiar"',
        ]);        

        App\Documento::create([
            'dsc' =>  'Permiso "Accidente de familiar"',
        ]);

        App\Documento::create([
            'dsc' =>  'Permiso "Diligencias personales"',
        ]);

        App\Documento::create([
            'dsc' =>  'Permiso "Actividades deportivas"',
        ]); 

        App\Documento::create([
            'dsc' =>  'Permiso "Asistencia a cursos"',
        ]);  

/*
        App\Documento::create([
            'dsc' =>  'Permiso ""',
        ]);        

        App\Documento::create([
            'dsc' =>  'Permiso ""',
        ]);        

        App\Documento::create([
        	'dsc' =>  'Solicitud de permisos',
        ]);*/
    }
}