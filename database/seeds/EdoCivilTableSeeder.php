<?php

use Illuminate\Database\Seeder;

class EdoCivilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\EdoCivil::create([
            'dsc'           =>  'Soltero(a)'
        ]);

        App\EdoCivil::create([
            'dsc'           =>  'Casado(a)'
        ]);
        
        App\EdoCivil::create([
            'dsc'           =>  'Viudo(a)'
        ]);

        App\EdoCivil::create([
            'dsc'           =>  'Divorciado(a)'
        ]);

        App\EdoCivil::create([
            'dsc'           =>  'Concubino(a)'
        ]);    }
}
