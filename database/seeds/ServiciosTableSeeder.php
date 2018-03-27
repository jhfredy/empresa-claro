<?php

use Illuminate\Database\Seeder;

class ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert([
            [
                'nombre' => 'Internet 5 megas',
                'costo' => 69900
            ],
            [
                'nombre' => 'Internet 10 megas',
                'costo' => 78900
            ],
            [
                'nombre' => 'Internet 20 megas',
                'costo' => 119900
            ],
            [
                'nombre' => 'Internet 50 megas',
                'costo' => 159900
            ],
            [
                'nombre' => 'Internet 100 megas',
                'costo' => 262900
            ]
        ]);
    }
}
