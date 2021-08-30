<?php

use Illuminate\Database\Seeder;

class DiscapacidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Discapacidade::create([
            'dsc'           =>  'No posee'
        ]);

        App\Discapacidade::create([
            'dsc'           =>  'Auditiva'
        ]);
        
        App\Discapacidade::create([
            'dsc'           =>  'Visual'
        ]);

        App\Discapacidade::create([
            'dsc'           =>  'Cognitiva'
        ]);

        App\Discapacidade::create([
            'dsc'           =>  'Musculoesquelética'
        ]);
        
        App\Discapacidade::create([
            'dsc'           =>  'Mental Psicosocial'
        ]);

        App\Discapacidade::create([
            'dsc'           =>  'Múltiple'
        ]);        

    }
}
