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
                'costo' => 69900,
                'gasto' => 5000
            ],
            [
                'nombre' => 'Internet 10 megas',
                'costo' => 78900,
                'gasto' => 7000
            ],
            [
                'nombre' => 'Internet 20 megas',
                'costo' => 119900,
                'gasto' => 9000
            ],
            [
                'nombre' => 'Internet 50 megas',
                'costo' => 159900,
                'gasto' => 11000
            ],
            [
                'nombre' => 'Internet 100 megas',
                'costo' => 262900,
                'gasto' => 13000
            ]
        ]);
    }
}
