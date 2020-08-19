<?php

use Illuminate\Database\Seeder;

class EstatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Estatu::create([
        	'dsc' =>  'Pediente',
        ]);
        
        App\Estatu::create([
        	'dsc' =>  'Aprobado',
        ]);

        App\Estatu::create([
        	'dsc' =>  'Rechazado',
        ]);
    }
}
