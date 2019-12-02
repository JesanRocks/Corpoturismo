<?php

use Illuminate\Database\Seeder;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Municipio::create([
        	'dsc'		    =>  'Acosta'
        ]);

        App\Municipio::create([
        	'dsc'		    =>  'Aguasay'
        ]);
        
        App\Municipio::create([
        	'dsc'		    =>  'Bolívar'
        ]);

        App\Municipio::create([
        	'dsc'		    =>  'Caripe'
        ]);

        App\Municipio::create([
        	'dsc'		    =>  'Cedeño'
        ]);

        App\Municipio::create([
        	'dsc'		    =>  'Ezequiel Zamora'
        ]);
        
        App\Municipio::create([
        	'dsc'		    =>  'Libertador'
        ]);

        App\Municipio::create([
        	'dsc'		    =>  'Maturín'
        ]);
        
        App\Municipio::create([
        	'dsc'		    =>  'Piar'
        ]);

        App\Municipio::create([
        	'dsc'		    =>  'Punceres'
        ]);

        App\Municipio::create([
        	'dsc'		    =>  'Santa Bárbara'
        ]);

        App\Municipio::create([
        	'dsc'		    =>  'Sotillo'
        ]);

        App\Municipio::create([
        	'dsc'		    =>  'Uracoa'
        ]);
    }
}
