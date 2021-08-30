<?php

use Illuminate\Database\Seeder;

class NivelesEducTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\NivelesEducativo::create([
            'dsc'           =>  'Sin Escolaridad'
        ]);

        App\NivelesEducativo::create([
            'dsc'           =>  'Primaria'
        ]);

        App\NivelesEducativo::create([
            'dsc'           =>  'Secundaria General'
        ]);

        App\NivelesEducativo::create([
            'dsc'           =>  'Secundaria Técnica'
        ]);

        App\NivelesEducativo::create([
            'dsc'           =>  'TSU'
        ]);

        App\NivelesEducativo::create([
            'dsc'           =>  'Universitario'
        ]);

    }
}
