<?php

use Illuminate\Database\Seeder;

class CondicionLaboralTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\CondicionesLaborale::create([
            'dsc'           =>  'Cesante'
        ]);   
        App\CondicionesLaborale::create([
            'dsc'           =>  'BTPPV'
        ]); 
       App\CondicionesLaborale::create([
            'dsc'           =>  'Ocupado'
        ]); 
    }
}

