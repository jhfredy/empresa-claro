<?php

use Illuminate\Database\Seeder;

class DepartamentosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('departamentos')->delete();
        
        \DB::table('departamentos')->insert(array (
            0 => 
            array (
                'id' => 5,
                'nombre' => 'ANTIOQUIA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 8,
                'nombre' => 'ATLÁNTICO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 11,
                'nombre' => 'BOGOTÁ, D.C.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 13,
                'nombre' => 'BOLÍVAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 15,
                'nombre' => 'BOYACÁ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 17,
                'nombre' => 'CALDAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 18,
                'nombre' => 'CAQUETÁ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 19,
                'nombre' => 'CAUCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 20,
                'nombre' => 'CESAR',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 23,
                'nombre' => 'CÓRDOBA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 25,
                'nombre' => 'CUNDINAMARCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 27,
                'nombre' => 'CHOCÓ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 41,
                'nombre' => 'HUILA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 44,
                'nombre' => 'LA GUAJIRA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 47,
                'nombre' => 'MAGDALENA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 50,
                'nombre' => 'META',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 52,
                'nombre' => 'NARIÑO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 54,
                'nombre' => 'NORTE DE SANTANDER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 63,
                'nombre' => 'QUINDIO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 66,
                'nombre' => 'RISARALDA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 68,
                'nombre' => 'SANTANDER',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 70,
                'nombre' => 'SUCRE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 73,
                'nombre' => 'TOLIMA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 76,
                'nombre' => 'VALLE DEL CAUCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 81,
                'nombre' => 'ARAUCA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 85,
                'nombre' => 'CASANARE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 86,
                'nombre' => 'PUTUMAYO',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 88,
                'nombre' => 'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 91,
                'nombre' => 'AMAZONAS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 94,
                'nombre' => 'GUAINÍA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 95,
                'nombre' => 'GUAVIARE',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 97,
                'nombre' => 'VAUPÉS',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 99,
                'nombre' => 'VICHADA',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}