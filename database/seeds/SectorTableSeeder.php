<?php

use Illuminate\Database\Seeder;

class SectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Sectore::create([
            'dsc'           =>  'Público'
        ]);
        App\Sectore::create([
            'dsc'           =>  'Privado'
        ]);
    }
}
