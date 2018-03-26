<?php

use Illuminate\Database\Seeder;

class MunicipiosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('municipios')->delete();
        
        \DB::table('municipios')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Abriaquí',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Acacías',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Acandí',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Acevedo',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Achí',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Agrado',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'Agua de Dios',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'Aguachica',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'Aguada',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'Aguadas',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'nombre' => 'Aguazul',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'nombre' => 'Agustín Codazzi',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'nombre' => 'Aipe',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'nombre' => 'Albania',
                'departamento_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'nombre' => 'Albania',
                'departamento_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'nombre' => 'Albania',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'nombre' => 'Albán',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
            'nombre' => 'Albán (San José)',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'nombre' => 'Alcalá',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'nombre' => 'Alejandria',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'nombre' => 'Algarrobo',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'nombre' => 'Algeciras',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'nombre' => 'Almaguer',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'nombre' => 'Almeida',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'nombre' => 'Alpujarra',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'nombre' => 'Altamira',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
            'nombre' => 'Alto Baudó (Pie de Pato)',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'nombre' => 'Altos del Rosario',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'nombre' => 'Alvarado',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'nombre' => 'Amagá',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'nombre' => 'Amalfi',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'nombre' => 'Ambalema',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'nombre' => 'Anapoima',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'nombre' => 'Ancuya',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'nombre' => 'Andalucía',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'nombre' => 'Andes',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'nombre' => 'Angelópolis',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'nombre' => 'Angostura',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'nombre' => 'Anolaima',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'nombre' => 'Anorí',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'nombre' => 'Anserma',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'nombre' => 'Ansermanuevo',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'nombre' => 'Anzoátegui',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'nombre' => 'Anzá',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'nombre' => 'Apartadó',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'nombre' => 'Apulo',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'nombre' => 'Apía',
                'departamento_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'nombre' => 'Aquitania',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'nombre' => 'Aracataca',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'nombre' => 'Aranzazu',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'nombre' => 'Aratoca',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'nombre' => 'Arauca',
                'departamento_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'nombre' => 'Arauquita',
                'departamento_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'nombre' => 'Arbeláez',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
            'nombre' => 'Arboleda (Berruecos)',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'nombre' => 'Arboledas',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'nombre' => 'Arboletes',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'nombre' => 'Arcabuco',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'nombre' => 'Arenal',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'nombre' => 'Argelia',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'nombre' => 'Argelia',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'nombre' => 'Argelia',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
            'nombre' => 'Ariguaní (El Difícil)',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'nombre' => 'Arjona',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'nombre' => 'Armenia',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'nombre' => 'Armenia',
                'departamento_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
            'nombre' => 'Armero (Guayabal)',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'nombre' => 'Arroyohondo',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'nombre' => 'Astrea',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'nombre' => 'Ataco',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
            'nombre' => 'Atrato (Yuto)',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'nombre' => 'Ayapel',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'nombre' => 'Bagadó',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
            'nombre' => 'Bahía Solano (Mútis)',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
            'nombre' => 'Bajo Baudó (Pizarro)',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'nombre' => 'Balboa',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'nombre' => 'Balboa',
                'departamento_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'nombre' => 'Baranoa',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'nombre' => 'Baraya',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'nombre' => 'Barbacoas',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'nombre' => 'Barbosa',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'nombre' => 'Barbosa',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'nombre' => 'Barichara',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'nombre' => 'Barranca de Upía',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'nombre' => 'Barrancabermeja',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'nombre' => 'Barrancas',
                'departamento_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'nombre' => 'Barranco de Loba',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'nombre' => 'Barranquilla',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'nombre' => 'Becerríl',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'nombre' => 'Belalcázar',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'nombre' => 'Bello',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'nombre' => 'Belmira',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'nombre' => 'Beltrán',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'nombre' => 'Belén',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'nombre' => 'Belén',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'nombre' => 'Belén de Bajirá',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'nombre' => 'Belén de Umbría',
                'departamento_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'nombre' => 'Belén de los Andaquíes',
                'departamento_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'nombre' => 'Berbeo',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'nombre' => 'Betania',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'nombre' => 'Beteitiva',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'nombre' => 'Betulia',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'nombre' => 'Betulia',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'nombre' => 'Bituima',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'nombre' => 'Boavita',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'nombre' => 'Bochalema',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'nombre' => 'Bogotá D.C.',
                'departamento_id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'nombre' => 'Bojacá',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
            'nombre' => 'Bojayá (Bellavista)',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'nombre' => 'Bolívar',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'nombre' => 'Bolívar',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'nombre' => 'Bolívar',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'nombre' => 'Bolívar',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'nombre' => 'Bosconia',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'nombre' => 'Boyacá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'nombre' => 'Briceño',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'nombre' => 'Briceño',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'nombre' => 'Bucaramanga',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'nombre' => 'Bucarasica',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'nombre' => 'Buenaventura',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'nombre' => 'Buenavista',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'nombre' => 'Buenavista',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'nombre' => 'Buenavista',
                'departamento_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'nombre' => 'Buenavista',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'nombre' => 'Buenos Aires',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'nombre' => 'Buesaco',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'nombre' => 'Buga',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'nombre' => 'Bugalagrande',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'nombre' => 'Burítica',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'nombre' => 'Busbanza',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'nombre' => 'Cabrera',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'nombre' => 'Cabrera',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'nombre' => 'Cabuyaro',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'nombre' => 'Cachipay',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'nombre' => 'Caicedo',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'nombre' => 'Caicedonia',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'nombre' => 'Caimito',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'nombre' => 'Cajamarca',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'nombre' => 'Cajibío',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'nombre' => 'Cajicá',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'nombre' => 'Calamar',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'nombre' => 'Calamar',
                'departamento_id' => 95,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'nombre' => 'Calarcá',
                'departamento_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'nombre' => 'Caldas',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'nombre' => 'Caldas',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'nombre' => 'Caldono',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'nombre' => 'California',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
            'nombre' => 'Calima (Darién)',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'nombre' => 'Caloto',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'nombre' => 'Calí',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'nombre' => 'Campamento',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'nombre' => 'Campo de la Cruz',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'nombre' => 'Campoalegre',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'nombre' => 'Campohermoso',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'nombre' => 'Canalete',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'nombre' => 'Candelaria',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'nombre' => 'Candelaria',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'nombre' => 'Cantagallo',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'nombre' => 'Cantón de San Pablo',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'nombre' => 'Caparrapí',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'nombre' => 'Capitanejo',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'nombre' => 'Caracolí',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'nombre' => 'Caramanta',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'nombre' => 'Carcasí',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'nombre' => 'Carepa',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'nombre' => 'Carmen de Apicalá',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'nombre' => 'Carmen de Carupa',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'nombre' => 'Carmen de Viboral',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
            'nombre' => 'Carmen del Darién (CURBARADÓ)',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'nombre' => 'Carolina',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'nombre' => 'Cartagena',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'nombre' => 'Cartagena del Chairá',
                'departamento_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'nombre' => 'Cartago',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'nombre' => 'Carurú',
                'departamento_id' => 97,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'nombre' => 'Casabianca',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'nombre' => 'Castilla la Nueva',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'nombre' => 'Caucasia',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'nombre' => 'Cañasgordas',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'nombre' => 'Cepita',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'nombre' => 'Cereté',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'nombre' => 'Cerinza',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'nombre' => 'Cerrito',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'nombre' => 'Cerro San Antonio',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'nombre' => 'Chachaguí',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'nombre' => 'Chaguaní',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'nombre' => 'Chalán',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'nombre' => 'Chaparral',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'nombre' => 'Charalá',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'nombre' => 'Charta',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'nombre' => 'Chigorodó',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'nombre' => 'Chima',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'nombre' => 'Chimichagua',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'nombre' => 'Chimá',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'nombre' => 'Chinavita',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'nombre' => 'Chinchiná',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'nombre' => 'Chinácota',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'nombre' => 'Chinú',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'nombre' => 'Chipaque',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'nombre' => 'Chipatá',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'nombre' => 'Chiquinquirá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'nombre' => 'Chiriguaná',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'nombre' => 'Chiscas',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'nombre' => 'Chita',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'nombre' => 'Chitagá',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'nombre' => 'Chitaraque',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'nombre' => 'Chivatá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'nombre' => 'Chivolo',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'nombre' => 'Choachí',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'nombre' => 'Chocontá',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'nombre' => 'Chámeza',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'nombre' => 'Chía',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'nombre' => 'Chíquiza',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'nombre' => 'Chívor',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'nombre' => 'Cicuco',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'nombre' => 'Cimitarra',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'nombre' => 'Circasia',
                'departamento_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'nombre' => 'Cisneros',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'nombre' => 'Ciénaga',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'nombre' => 'Ciénaga',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'nombre' => 'Ciénaga de Oro',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'nombre' => 'Clemencia',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'nombre' => 'Cocorná',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'nombre' => 'Coello',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'nombre' => 'Cogua',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'nombre' => 'Colombia',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
            'nombre' => 'Colosó (Ricaurte)',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'nombre' => 'Colón',
                'departamento_id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
            'nombre' => 'Colón (Génova)',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'nombre' => 'Concepción',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'nombre' => 'Concepción',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'nombre' => 'Concordia',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'nombre' => 'Concordia',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'nombre' => 'Condoto',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'nombre' => 'Confines',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'nombre' => 'Consaca',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'nombre' => 'Contadero',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'nombre' => 'Contratación',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'nombre' => 'Convención',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'nombre' => 'Copacabana',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'nombre' => 'Coper',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'nombre' => 'Cordobá',
                'departamento_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'nombre' => 'Corinto',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'nombre' => 'Coromoro',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'nombre' => 'Corozal',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'nombre' => 'Corrales',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'nombre' => 'Cota',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'nombre' => 'Cotorra',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'nombre' => 'Covarachía',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'nombre' => 'Coveñas',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'nombre' => 'Coyaima',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'nombre' => 'Cravo Norte',
                'departamento_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
            'nombre' => 'Cuaspud (Carlosama)',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'nombre' => 'Cubarral',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'nombre' => 'Cubará',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'nombre' => 'Cucaita',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'nombre' => 'Cucunubá',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'nombre' => 'Cucutilla',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'nombre' => 'Cuitiva',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'nombre' => 'Cumaral',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'nombre' => 'Cumaribo',
                'departamento_id' => 99,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'nombre' => 'Cumbal',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'nombre' => 'Cumbitara',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'nombre' => 'Cunday',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'nombre' => 'Curillo',
                'departamento_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'nombre' => 'Curití',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'nombre' => 'Curumaní',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'nombre' => 'Cáceres',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'nombre' => 'Cáchira',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'nombre' => 'Cácota',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'nombre' => 'Cáqueza',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'nombre' => 'Cértegui',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'nombre' => 'Cómbita',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'nombre' => 'Córdoba',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'nombre' => 'Córdoba',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'nombre' => 'Cúcuta',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'nombre' => 'Dabeiba',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'nombre' => 'Dagua',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'nombre' => 'Dibulla',
                'departamento_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'nombre' => 'Distracción',
                'departamento_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'nombre' => 'Dolores',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'nombre' => 'Don Matías',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'nombre' => 'Dos Quebradas',
                'departamento_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'nombre' => 'Duitama',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'nombre' => 'Durania',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'nombre' => 'Ebéjico',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'nombre' => 'El Bagre',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'nombre' => 'El Banco',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'nombre' => 'El Cairo',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'nombre' => 'El Calvario',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'nombre' => 'El Carmen',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'nombre' => 'El Carmen',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'nombre' => 'El Carmen de Atrato',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'nombre' => 'El Carmen de Bolívar',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'nombre' => 'El Castillo',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'nombre' => 'El Cerrito',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'nombre' => 'El Charco',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'nombre' => 'El Cocuy',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'nombre' => 'El Colegio',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'nombre' => 'El Copey',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'nombre' => 'El Doncello',
                'departamento_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'nombre' => 'El Dorado',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'nombre' => 'El Dovio',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'nombre' => 'El Espino',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'nombre' => 'El Guacamayo',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'nombre' => 'El Guamo',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'nombre' => 'El Molino',
                'departamento_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'nombre' => 'El Paso',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'nombre' => 'El Paujil',
                'departamento_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'nombre' => 'El Peñol',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'nombre' => 'El Peñon',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'nombre' => 'El Peñon',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'nombre' => 'El Peñón',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'nombre' => 'El Piñon',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'nombre' => 'El Playón',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'nombre' => 'El Retorno',
                'departamento_id' => 95,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'nombre' => 'El Retén',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'nombre' => 'El Roble',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'nombre' => 'El Rosal',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'nombre' => 'El Rosario',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'nombre' => 'El Tablón de Gómez',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'nombre' => 'El Tambo',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'nombre' => 'El Tambo',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'nombre' => 'El Tarra',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'nombre' => 'El Zulia',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'nombre' => 'El Águila',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'nombre' => 'Elías',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'nombre' => 'Encino',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'nombre' => 'Enciso',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'nombre' => 'Entrerríos',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'nombre' => 'Envigado',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'nombre' => 'Espinal',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'nombre' => 'Facatativá',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'nombre' => 'Falan',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'nombre' => 'Filadelfia',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'nombre' => 'Filandia',
                'departamento_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'nombre' => 'Firavitoba',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'nombre' => 'Flandes',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'nombre' => 'Florencia',
                'departamento_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'nombre' => 'Florencia',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'nombre' => 'Floresta',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'nombre' => 'Florida',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'nombre' => 'Floridablanca',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'nombre' => 'Florián',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'nombre' => 'Fonseca',
                'departamento_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'nombre' => 'Fortúl',
                'departamento_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'nombre' => 'Fosca',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'nombre' => 'Francisco Pizarro',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'nombre' => 'Fredonia',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'nombre' => 'Fresno',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'nombre' => 'Frontino',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'nombre' => 'Fuente de Oro',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'nombre' => 'Fundación',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'nombre' => 'Funes',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'nombre' => 'Funza',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'nombre' => 'Fusagasugá',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'nombre' => 'Fómeque',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'nombre' => 'Fúquene',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'nombre' => 'Gachalá',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'nombre' => 'Gachancipá',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'nombre' => 'Gachantivá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'nombre' => 'Gachetá',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'nombre' => 'Galapa',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
            'nombre' => 'Galeras (Nueva Granada)',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'nombre' => 'Galán',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'nombre' => 'Gama',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'nombre' => 'Gamarra',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'nombre' => 'Garagoa',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'nombre' => 'Garzón',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'nombre' => 'Gigante',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'nombre' => 'Ginebra',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'nombre' => 'Giraldo',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'nombre' => 'Girardot',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'nombre' => 'Girardota',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'nombre' => 'Girón',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'nombre' => 'Gonzalez',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'nombre' => 'Gramalote',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'nombre' => 'Granada',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'nombre' => 'Granada',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'nombre' => 'Granada',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'nombre' => 'Guaca',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'nombre' => 'Guacamayas',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'nombre' => 'Guacarí',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'nombre' => 'Guachavés',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'nombre' => 'Guachené',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'nombre' => 'Guachetá',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'nombre' => 'Guachucal',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'nombre' => 'Guadalupe',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'nombre' => 'Guadalupe',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'nombre' => 'Guadalupe',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'nombre' => 'Guaduas',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'nombre' => 'Guaitarilla',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'nombre' => 'Gualmatán',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'nombre' => 'Guamal',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'nombre' => 'Guamal',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'nombre' => 'Guamo',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'nombre' => 'Guapota',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'nombre' => 'Guapí',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'nombre' => 'Guaranda',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'nombre' => 'Guarne',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'nombre' => 'Guasca',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'nombre' => 'Guatapé',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'nombre' => 'Guataquí',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'nombre' => 'Guatavita',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'nombre' => 'Guateque',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'nombre' => 'Guavatá',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'nombre' => 'Guayabal de Siquima',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'nombre' => 'Guayabetal',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'nombre' => 'Guayatá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'nombre' => 'Guepsa',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'nombre' => 'Guicán',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'nombre' => 'Gutiérrez',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'nombre' => 'Guática',
                'departamento_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'nombre' => 'Gámbita',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'nombre' => 'Gámeza',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'nombre' => 'Génova',
                'departamento_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'nombre' => 'Gómez Plata',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'nombre' => 'Hacarí',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'nombre' => 'Hatillo de Loba',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'nombre' => 'Hato',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'nombre' => 'Hato Corozal',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'nombre' => 'Hatonuevo',
                'departamento_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'nombre' => 'Heliconia',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'nombre' => 'Herrán',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'nombre' => 'Herveo',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'nombre' => 'Hispania',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 426,
                'nombre' => 'Hobo',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'nombre' => 'Honda',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 428,
                'nombre' => 'Ibagué',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 429,
                'nombre' => 'Icononzo',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 430,
                'nombre' => 'Iles',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 431,
                'nombre' => 'Imúes',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 432,
                'nombre' => 'Inzá',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 433,
                'nombre' => 'Inírida',
                'departamento_id' => 94,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 434,
                'nombre' => 'Ipiales',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 435,
                'nombre' => 'Isnos',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 436,
                'nombre' => 'Istmina',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 437,
                'nombre' => 'Itagüí',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 438,
                'nombre' => 'Ituango',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 439,
                'nombre' => 'Izá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 440,
                'nombre' => 'Jambaló',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 441,
                'nombre' => 'Jamundí',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 442,
                'nombre' => 'Jardín',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 443,
                'nombre' => 'Jenesano',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 444,
                'nombre' => 'Jericó',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 445,
                'nombre' => 'Jericó',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 446,
                'nombre' => 'Jerusalén',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 447,
                'nombre' => 'Jesús María',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 448,
                'nombre' => 'Jordán',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 449,
                'nombre' => 'Juan de Acosta',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 450,
                'nombre' => 'Junín',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 451,
                'nombre' => 'Juradó',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 452,
                'nombre' => 'La Apartada y La Frontera',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'nombre' => 'La Argentina',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 454,
                'nombre' => 'La Belleza',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 455,
                'nombre' => 'La Calera',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 456,
                'nombre' => 'La Capilla',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 457,
                'nombre' => 'La Ceja',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 458,
                'nombre' => 'La Celia',
                'departamento_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 459,
                'nombre' => 'La Cruz',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 460,
                'nombre' => 'La Cumbre',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 461,
                'nombre' => 'La Dorada',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 462,
                'nombre' => 'La Esperanza',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 463,
                'nombre' => 'La Estrella',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 464,
                'nombre' => 'La Florida',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 465,
                'nombre' => 'La Gloria',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 466,
                'nombre' => 'La Jagua de Ibirico',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 467,
                'nombre' => 'La Jagua del Pilar',
                'departamento_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 468,
                'nombre' => 'La Llanada',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 469,
                'nombre' => 'La Macarena',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 470,
                'nombre' => 'La Merced',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 471,
                'nombre' => 'La Mesa',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 472,
                'nombre' => 'La Montañita',
                'departamento_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 473,
                'nombre' => 'La Palma',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 474,
                'nombre' => 'La Paz',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 475,
            'nombre' => 'La Paz (Robles)',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 476,
                'nombre' => 'La Peña',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 477,
                'nombre' => 'La Pintada',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 478,
                'nombre' => 'La Plata',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 479,
                'nombre' => 'La Playa',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 480,
                'nombre' => 'La Primavera',
                'departamento_id' => 99,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 481,
                'nombre' => 'La Salina',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 482,
                'nombre' => 'La Sierra',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 483,
                'nombre' => 'La Tebaida',
                'departamento_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 484,
                'nombre' => 'La Tola',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 485,
                'nombre' => 'La Unión',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 486,
                'nombre' => 'La Unión',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 487,
                'nombre' => 'La Unión',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 488,
                'nombre' => 'La Unión',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 489,
                'nombre' => 'La Uvita',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 490,
                'nombre' => 'La Vega',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 491,
                'nombre' => 'La Vega',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 492,
                'nombre' => 'La Victoria',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 493,
                'nombre' => 'La Victoria',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 494,
                'nombre' => 'La Victoria',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 495,
                'nombre' => 'La Virginia',
                'departamento_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 496,
                'nombre' => 'Labateca',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 497,
                'nombre' => 'Labranzagrande',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 498,
                'nombre' => 'Landázuri',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 499,
                'nombre' => 'Lebrija',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 500,
                'nombre' => 'Leiva',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('municipios')->insert(array (
            0 => 
            array (
                'id' => 501,
                'nombre' => 'Lejanías',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 502,
                'nombre' => 'Lenguazaque',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 503,
                'nombre' => 'Leticia',
                'departamento_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 504,
                'nombre' => 'Liborina',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 505,
                'nombre' => 'Linares',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 506,
                'nombre' => 'Lloró',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 507,
                'nombre' => 'Lorica',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 508,
                'nombre' => 'Los Córdobas',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 509,
                'nombre' => 'Los Palmitos',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 510,
                'nombre' => 'Los Patios',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 511,
                'nombre' => 'Los Santos',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 512,
                'nombre' => 'Lourdes',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 513,
                'nombre' => 'Luruaco',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 514,
                'nombre' => 'Lérida',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 515,
                'nombre' => 'Líbano',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 516,
            'nombre' => 'López (Micay)',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 517,
                'nombre' => 'Macanal',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 518,
                'nombre' => 'Macaravita',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 519,
                'nombre' => 'Maceo',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 520,
                'nombre' => 'Machetá',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 521,
                'nombre' => 'Madrid',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 522,
                'nombre' => 'Magangué',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 523,
            'nombre' => 'Magüi (Payán)',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 524,
                'nombre' => 'Mahates',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 525,
                'nombre' => 'Maicao',
                'departamento_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 526,
                'nombre' => 'Majagual',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 527,
                'nombre' => 'Malambo',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 528,
            'nombre' => 'Mallama (Piedrancha)',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 529,
                'nombre' => 'Manatí',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 530,
                'nombre' => 'Manaure',
                'departamento_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 531,
                'nombre' => 'Manaure Balcón del Cesar',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 532,
                'nombre' => 'Manizales',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 533,
                'nombre' => 'Manta',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 534,
                'nombre' => 'Manzanares',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 535,
                'nombre' => 'Maní',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 536,
                'nombre' => 'Mapiripan',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 537,
                'nombre' => 'Margarita',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 538,
                'nombre' => 'Marinilla',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 539,
                'nombre' => 'Maripí',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 540,
                'nombre' => 'Mariquita',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 541,
                'nombre' => 'Marmato',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 542,
                'nombre' => 'Marquetalia',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 543,
                'nombre' => 'Marsella',
                'departamento_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 544,
                'nombre' => 'Marulanda',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 545,
                'nombre' => 'María la Baja',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 546,
                'nombre' => 'Matanza',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 547,
                'nombre' => 'Medellín',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 548,
                'nombre' => 'Medina',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 549,
                'nombre' => 'Medio Atrato',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 550,
                'nombre' => 'Medio Baudó',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 551,
            'nombre' => 'Medio San Juan (ANDAGOYA)',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 552,
                'nombre' => 'Melgar',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 553,
                'nombre' => 'Mercaderes',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 554,
                'nombre' => 'Mesetas',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 555,
                'nombre' => 'Milán',
                'departamento_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 556,
                'nombre' => 'Miraflores',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 557,
                'nombre' => 'Miraflores',
                'departamento_id' => 95,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 558,
                'nombre' => 'Miranda',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 559,
                'nombre' => 'Mistrató',
                'departamento_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 560,
                'nombre' => 'Mitú',
                'departamento_id' => 97,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 561,
                'nombre' => 'Mocoa',
                'departamento_id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 562,
                'nombre' => 'Mogotes',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 563,
                'nombre' => 'Molagavita',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 564,
                'nombre' => 'Momil',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 565,
                'nombre' => 'Mompós',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 566,
                'nombre' => 'Mongua',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 567,
                'nombre' => 'Monguí',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 568,
                'nombre' => 'Moniquirá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 569,
                'nombre' => 'Montebello',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 570,
                'nombre' => 'Montecristo',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 571,
                'nombre' => 'Montelíbano',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 572,
                'nombre' => 'Montenegro',
                'departamento_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 573,
                'nombre' => 'Monteria',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 574,
                'nombre' => 'Monterrey',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 575,
                'nombre' => 'Morales',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 576,
                'nombre' => 'Morales',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 577,
                'nombre' => 'Morelia',
                'departamento_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 578,
                'nombre' => 'Morroa',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 579,
                'nombre' => 'Mosquera',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 580,
                'nombre' => 'Mosquera',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 581,
                'nombre' => 'Motavita',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 582,
                'nombre' => 'Moñitos',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 583,
                'nombre' => 'Murillo',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 584,
                'nombre' => 'Murindó',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 585,
                'nombre' => 'Mutatá',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 586,
                'nombre' => 'Mutiscua',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 587,
                'nombre' => 'Muzo',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 588,
                'nombre' => 'Málaga',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 589,
                'nombre' => 'Nariño',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 590,
                'nombre' => 'Nariño',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 591,
                'nombre' => 'Nariño',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 592,
                'nombre' => 'Natagaima',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 593,
                'nombre' => 'Nechí',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 594,
                'nombre' => 'Necoclí',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 595,
                'nombre' => 'Neira',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 596,
                'nombre' => 'Neiva',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 597,
                'nombre' => 'Nemocón',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 598,
                'nombre' => 'Nilo',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 599,
                'nombre' => 'Nimaima',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 600,
                'nombre' => 'Nobsa',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 601,
                'nombre' => 'Nocaima',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 602,
                'nombre' => 'Norcasia',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 603,
                'nombre' => 'Norosí',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 604,
                'nombre' => 'Novita',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 605,
                'nombre' => 'Nueva Granada',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 606,
                'nombre' => 'Nuevo Colón',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 607,
                'nombre' => 'Nunchía',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 608,
                'nombre' => 'Nuquí',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 609,
                'nombre' => 'Nátaga',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 610,
                'nombre' => 'Obando',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 611,
                'nombre' => 'Ocamonte',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 612,
                'nombre' => 'Ocaña',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 613,
                'nombre' => 'Oiba',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 614,
                'nombre' => 'Oicatá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 615,
                'nombre' => 'Olaya',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 616,
                'nombre' => 'Olaya Herrera',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 617,
                'nombre' => 'Onzaga',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 618,
                'nombre' => 'Oporapa',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 619,
                'nombre' => 'Orito',
                'departamento_id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 620,
                'nombre' => 'Orocué',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 621,
                'nombre' => 'Ortega',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 622,
                'nombre' => 'Ospina',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 623,
                'nombre' => 'Otanche',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 624,
                'nombre' => 'Ovejas',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 625,
                'nombre' => 'Pachavita',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 626,
                'nombre' => 'Pacho',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 627,
                'nombre' => 'Padilla',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 628,
                'nombre' => 'Paicol',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 629,
                'nombre' => 'Pailitas',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 630,
                'nombre' => 'Paime',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 631,
                'nombre' => 'Paipa',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 632,
                'nombre' => 'Pajarito',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 633,
                'nombre' => 'Palermo',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 634,
                'nombre' => 'Palestina',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 635,
                'nombre' => 'Palestina',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 636,
                'nombre' => 'Palmar',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 637,
                'nombre' => 'Palmar de Varela',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 638,
                'nombre' => 'Palmas del Socorro',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 639,
                'nombre' => 'Palmira',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 640,
                'nombre' => 'Palmito',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 641,
                'nombre' => 'Palocabildo',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 642,
                'nombre' => 'Pamplona',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 643,
                'nombre' => 'Pamplonita',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 644,
                'nombre' => 'Pandi',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 645,
                'nombre' => 'Panqueba',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 646,
                'nombre' => 'Paratebueno',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 647,
                'nombre' => 'Pasca',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 648,
            'nombre' => 'Patía (El Bordo)',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 649,
                'nombre' => 'Pauna',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 650,
                'nombre' => 'Paya',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 651,
                'nombre' => 'Paz de Ariporo',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 652,
                'nombre' => 'Paz de Río',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 653,
                'nombre' => 'Pedraza',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 654,
                'nombre' => 'Pelaya',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 655,
                'nombre' => 'Pensilvania',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 656,
                'nombre' => 'Peque',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 657,
                'nombre' => 'Pereira',
                'departamento_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 658,
                'nombre' => 'Pesca',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 659,
                'nombre' => 'Peñol',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 660,
                'nombre' => 'Piamonte',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 661,
                'nombre' => 'Pie de Cuesta',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 662,
                'nombre' => 'Piedras',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 663,
                'nombre' => 'Piendamó',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 664,
                'nombre' => 'Pijao',
                'departamento_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 665,
                'nombre' => 'Pijiño',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 666,
                'nombre' => 'Pinchote',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 667,
                'nombre' => 'Pinillos',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 668,
                'nombre' => 'Piojo',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 669,
                'nombre' => 'Pisva',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 670,
                'nombre' => 'Pital',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 671,
                'nombre' => 'Pitalito',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 672,
                'nombre' => 'Pivijay',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 673,
                'nombre' => 'Planadas',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 674,
                'nombre' => 'Planeta Rica',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 675,
                'nombre' => 'Plato',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 676,
                'nombre' => 'Policarpa',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 677,
                'nombre' => 'Polonuevo',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 678,
                'nombre' => 'Ponedera',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 679,
                'nombre' => 'Popayán',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 680,
                'nombre' => 'Pore',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 681,
                'nombre' => 'Potosí',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 682,
                'nombre' => 'Pradera',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 683,
                'nombre' => 'Prado',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 684,
                'nombre' => 'Providencia',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 685,
                'nombre' => 'Providencia',
                'departamento_id' => 88,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 686,
                'nombre' => 'Pueblo Bello',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 687,
                'nombre' => 'Pueblo Nuevo',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 688,
                'nombre' => 'Pueblo Rico',
                'departamento_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 689,
                'nombre' => 'Pueblorrico',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 690,
                'nombre' => 'Puebloviejo',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 691,
                'nombre' => 'Puente Nacional',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 692,
                'nombre' => 'Puerres',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 693,
                'nombre' => 'Puerto Asís',
                'departamento_id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 694,
                'nombre' => 'Puerto Berrío',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 695,
                'nombre' => 'Puerto Boyacá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 696,
                'nombre' => 'Puerto Caicedo',
                'departamento_id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 697,
                'nombre' => 'Puerto Carreño',
                'departamento_id' => 99,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 698,
                'nombre' => 'Puerto Colombia',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 699,
                'nombre' => 'Puerto Concordia',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 700,
                'nombre' => 'Puerto Escondido',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 701,
                'nombre' => 'Puerto Gaitán',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 702,
                'nombre' => 'Puerto Guzmán',
                'departamento_id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 703,
                'nombre' => 'Puerto Leguízamo',
                'departamento_id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 704,
                'nombre' => 'Puerto Libertador',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 705,
                'nombre' => 'Puerto Lleras',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 706,
                'nombre' => 'Puerto López',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 707,
                'nombre' => 'Puerto Nare',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 708,
                'nombre' => 'Puerto Nariño',
                'departamento_id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 709,
                'nombre' => 'Puerto Parra',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 710,
                'nombre' => 'Puerto Rico',
                'departamento_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 711,
                'nombre' => 'Puerto Rico',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 712,
                'nombre' => 'Puerto Rondón',
                'departamento_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 713,
                'nombre' => 'Puerto Salgar',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 714,
                'nombre' => 'Puerto Santander',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 715,
                'nombre' => 'Puerto Tejada',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 716,
                'nombre' => 'Puerto Triunfo',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 717,
                'nombre' => 'Puerto Wilches',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 718,
                'nombre' => 'Pulí',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 719,
                'nombre' => 'Pupiales',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 720,
            'nombre' => 'Puracé (Coconuco)',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 721,
                'nombre' => 'Purificación',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 722,
                'nombre' => 'Purísima',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 723,
                'nombre' => 'Pácora',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 724,
                'nombre' => 'Páez',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 725,
            'nombre' => 'Páez (Belalcazar)',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 726,
                'nombre' => 'Páramo',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 727,
                'nombre' => 'Quebradanegra',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 728,
                'nombre' => 'Quetame',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 729,
                'nombre' => 'Quibdó',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 730,
                'nombre' => 'Quimbaya',
                'departamento_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 731,
                'nombre' => 'Quinchía',
                'departamento_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 732,
                'nombre' => 'Quipama',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 733,
                'nombre' => 'Quipile',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 734,
                'nombre' => 'Ragonvalia',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 735,
                'nombre' => 'Ramiriquí',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 736,
                'nombre' => 'Recetor',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 737,
                'nombre' => 'Regidor',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 738,
                'nombre' => 'Remedios',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 739,
                'nombre' => 'Remolino',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 740,
                'nombre' => 'Repelón',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 741,
                'nombre' => 'Restrepo',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 742,
                'nombre' => 'Restrepo',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 743,
                'nombre' => 'Retiro',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 744,
                'nombre' => 'Ricaurte',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 745,
                'nombre' => 'Ricaurte',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 746,
                'nombre' => 'Rio Negro',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 747,
                'nombre' => 'Rioblanco',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 748,
                'nombre' => 'Riofrío',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 749,
                'nombre' => 'Riohacha',
                'departamento_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 750,
                'nombre' => 'Risaralda',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 751,
                'nombre' => 'Rivera',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 752,
            'nombre' => 'Roberto Payán (San José)',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 753,
                'nombre' => 'Roldanillo',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 754,
                'nombre' => 'Roncesvalles',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 755,
                'nombre' => 'Rondón',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 756,
                'nombre' => 'Rosas',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 757,
                'nombre' => 'Rovira',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 758,
                'nombre' => 'Ráquira',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 759,
                'nombre' => 'Río Iró',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 760,
                'nombre' => 'Río Quito',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 761,
                'nombre' => 'Río Sucio',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 762,
                'nombre' => 'Río Viejo',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 763,
                'nombre' => 'Río de oro',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 764,
                'nombre' => 'Ríonegro',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 765,
                'nombre' => 'Ríosucio',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 766,
                'nombre' => 'Sabana de Torres',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 767,
                'nombre' => 'Sabanagrande',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 768,
                'nombre' => 'Sabanalarga',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 769,
                'nombre' => 'Sabanalarga',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 770,
                'nombre' => 'Sabanalarga',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 771,
            'nombre' => 'Sabanas de San Angel (SAN ANGEL)',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 772,
                'nombre' => 'Sabaneta',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 773,
                'nombre' => 'Saboyá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 774,
                'nombre' => 'Sahagún',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 775,
                'nombre' => 'Saladoblanco',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 776,
                'nombre' => 'Salamina',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 777,
                'nombre' => 'Salamina',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 778,
                'nombre' => 'Salazar',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 779,
                'nombre' => 'Saldaña',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 780,
                'nombre' => 'Salento',
                'departamento_id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 781,
                'nombre' => 'Salgar',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 782,
                'nombre' => 'Samacá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 783,
                'nombre' => 'Samaniego',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 784,
                'nombre' => 'Samaná',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 785,
                'nombre' => 'Sampués',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 786,
                'nombre' => 'San Agustín',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 787,
                'nombre' => 'San Alberto',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 788,
                'nombre' => 'San Andrés',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 789,
                'nombre' => 'San Andrés Sotavento',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 790,
                'nombre' => 'San Andrés de Cuerquía',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 791,
                'nombre' => 'San Antero',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 792,
                'nombre' => 'San Antonio',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 793,
                'nombre' => 'San Antonio de Tequendama',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 794,
                'nombre' => 'San Benito',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 795,
                'nombre' => 'San Benito Abad',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 796,
                'nombre' => 'San Bernardo',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 797,
                'nombre' => 'San Bernardo',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 798,
                'nombre' => 'San Bernardo del Viento',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 799,
                'nombre' => 'San Calixto',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 800,
                'nombre' => 'San Carlos',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 801,
                'nombre' => 'San Carlos',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 802,
                'nombre' => 'San Carlos de Guaroa',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 803,
                'nombre' => 'San Cayetano',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 804,
                'nombre' => 'San Cayetano',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 805,
                'nombre' => 'San Cristobal',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 806,
                'nombre' => 'San Diego',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 807,
                'nombre' => 'San Eduardo',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 808,
                'nombre' => 'San Estanislao',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 809,
                'nombre' => 'San Fernando',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 810,
                'nombre' => 'San Francisco',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 811,
                'nombre' => 'San Francisco',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 812,
                'nombre' => 'San Francisco',
                'departamento_id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 813,
                'nombre' => 'San Gíl',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 814,
                'nombre' => 'San Jacinto',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 815,
                'nombre' => 'San Jacinto del Cauca',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 816,
                'nombre' => 'San Jerónimo',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 817,
                'nombre' => 'San Joaquín',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 818,
                'nombre' => 'San José',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 819,
                'nombre' => 'San José de Miranda',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 820,
                'nombre' => 'San José de Montaña',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 821,
                'nombre' => 'San José de Pare',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 822,
                'nombre' => 'San José de Uré',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 823,
                'nombre' => 'San José del Fragua',
                'departamento_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 824,
                'nombre' => 'San José del Guaviare',
                'departamento_id' => 95,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 825,
                'nombre' => 'San José del Palmar',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 826,
                'nombre' => 'San Juan de Arama',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 827,
                'nombre' => 'San Juan de Betulia',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 828,
                'nombre' => 'San Juan de Nepomuceno',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 829,
                'nombre' => 'San Juan de Pasto',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 830,
                'nombre' => 'San Juan de Río Seco',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 831,
                'nombre' => 'San Juan de Urabá',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 832,
                'nombre' => 'San Juan del Cesar',
                'departamento_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 833,
                'nombre' => 'San Juanito',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 834,
                'nombre' => 'San Lorenzo',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 835,
                'nombre' => 'San Luis',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 836,
                'nombre' => 'San Luís',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 837,
                'nombre' => 'San Luís de Gaceno',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 838,
                'nombre' => 'San Luís de Palenque',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 839,
                'nombre' => 'San Marcos',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 840,
                'nombre' => 'San Martín',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 841,
                'nombre' => 'San Martín',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 842,
                'nombre' => 'San Martín de Loba',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 843,
                'nombre' => 'San Mateo',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 844,
                'nombre' => 'San Miguel',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 845,
                'nombre' => 'San Miguel',
                'departamento_id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 846,
                'nombre' => 'San Miguel de Sema',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 847,
                'nombre' => 'San Onofre',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 848,
                'nombre' => 'San Pablo',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 849,
                'nombre' => 'San Pablo',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 850,
                'nombre' => 'San Pablo de Borbur',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 851,
                'nombre' => 'San Pedro',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 852,
                'nombre' => 'San Pedro',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 853,
                'nombre' => 'San Pedro',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 854,
                'nombre' => 'San Pedro de Cartago',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 855,
                'nombre' => 'San Pedro de Urabá',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 856,
                'nombre' => 'San Pelayo',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 857,
                'nombre' => 'San Rafael',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 858,
                'nombre' => 'San Roque',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 859,
                'nombre' => 'San Sebastián',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 860,
                'nombre' => 'San Sebastián de Buenavista',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 861,
                'nombre' => 'San Vicente',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 862,
                'nombre' => 'San Vicente del Caguán',
                'departamento_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 863,
                'nombre' => 'San Vicente del Chucurí',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 864,
                'nombre' => 'San Zenón',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 865,
                'nombre' => 'Sandoná',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 866,
                'nombre' => 'Santa Ana',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 867,
                'nombre' => 'Santa Bárbara',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 868,
                'nombre' => 'Santa Bárbara',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 869,
            'nombre' => 'Santa Bárbara (Iscuandé)',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 870,
                'nombre' => 'Santa Bárbara de Pinto',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 871,
                'nombre' => 'Santa Catalina',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 872,
                'nombre' => 'Santa Fé de Antioquia',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 873,
                'nombre' => 'Santa Genoveva de Docorodó',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 874,
                'nombre' => 'Santa Helena del Opón',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 875,
                'nombre' => 'Santa Isabel',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 876,
                'nombre' => 'Santa Lucía',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 877,
                'nombre' => 'Santa Marta',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 878,
                'nombre' => 'Santa María',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 879,
                'nombre' => 'Santa María',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 880,
                'nombre' => 'Santa Rosa',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 881,
                'nombre' => 'Santa Rosa',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 882,
                'nombre' => 'Santa Rosa de Cabal',
                'departamento_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 883,
                'nombre' => 'Santa Rosa de Osos',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 884,
                'nombre' => 'Santa Rosa de Viterbo',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 885,
                'nombre' => 'Santa Rosa del Sur',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 886,
                'nombre' => 'Santa Rosalía',
                'departamento_id' => 99,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 887,
                'nombre' => 'Santa Sofía',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 888,
                'nombre' => 'Santana',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 889,
                'nombre' => 'Santander de Quilichao',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 890,
                'nombre' => 'Santiago',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 891,
                'nombre' => 'Santiago',
                'departamento_id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 892,
                'nombre' => 'Santo Domingo',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 893,
                'nombre' => 'Santo Tomás',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 894,
                'nombre' => 'Santuario',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 895,
                'nombre' => 'Santuario',
                'departamento_id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 896,
                'nombre' => 'Sapuyes',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 897,
                'nombre' => 'Saravena',
                'departamento_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 898,
                'nombre' => 'Sardinata',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 899,
                'nombre' => 'Sasaima',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 900,
                'nombre' => 'Sativanorte',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 901,
                'nombre' => 'Sativasur',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 902,
                'nombre' => 'Segovia',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 903,
                'nombre' => 'Sesquilé',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 904,
                'nombre' => 'Sevilla',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 905,
                'nombre' => 'Siachoque',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 906,
                'nombre' => 'Sibaté',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 907,
                'nombre' => 'Sibundoy',
                'departamento_id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 908,
                'nombre' => 'Silos',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 909,
                'nombre' => 'Silvania',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 910,
                'nombre' => 'Silvia',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 911,
                'nombre' => 'Simacota',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 912,
                'nombre' => 'Simijaca',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 913,
                'nombre' => 'Simití',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 914,
                'nombre' => 'Sincelejo',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 915,
                'nombre' => 'Sincé',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 916,
                'nombre' => 'Sipí',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 917,
                'nombre' => 'Sitionuevo',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 918,
                'nombre' => 'Soacha',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 919,
                'nombre' => 'Soatá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 920,
                'nombre' => 'Socha',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 921,
                'nombre' => 'Socorro',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 922,
                'nombre' => 'Socotá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 923,
                'nombre' => 'Sogamoso',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 924,
                'nombre' => 'Solano',
                'departamento_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 925,
                'nombre' => 'Soledad',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 926,
                'nombre' => 'Solita',
                'departamento_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 927,
                'nombre' => 'Somondoco',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 928,
                'nombre' => 'Sonsón',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 929,
                'nombre' => 'Sopetrán',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 930,
                'nombre' => 'Soplaviento',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 931,
                'nombre' => 'Sopó',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 932,
                'nombre' => 'Sora',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 933,
                'nombre' => 'Soracá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 934,
                'nombre' => 'Sotaquirá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 935,
            'nombre' => 'Sotara (Paispamba)',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 936,
            'nombre' => 'Sotomayor (Los Andes)',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 937,
                'nombre' => 'Suaita',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 938,
                'nombre' => 'Suan',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 939,
                'nombre' => 'Suaza',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 940,
                'nombre' => 'Subachoque',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 941,
                'nombre' => 'Sucre',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 942,
                'nombre' => 'Sucre',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 943,
                'nombre' => 'Sucre',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 944,
                'nombre' => 'Suesca',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 945,
                'nombre' => 'Supatá',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 946,
                'nombre' => 'Supía',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 947,
                'nombre' => 'Suratá',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 948,
                'nombre' => 'Susa',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 949,
                'nombre' => 'Susacón',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 950,
                'nombre' => 'Sutamarchán',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 951,
                'nombre' => 'Sutatausa',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 952,
                'nombre' => 'Sutatenza',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 953,
                'nombre' => 'Suárez',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 954,
                'nombre' => 'Suárez',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 955,
                'nombre' => 'Sácama',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 956,
                'nombre' => 'Sáchica',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 957,
                'nombre' => 'Tabio',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 958,
                'nombre' => 'Tadó',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 959,
                'nombre' => 'Talaigua Nuevo',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 960,
                'nombre' => 'Tamalameque',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 961,
                'nombre' => 'Tame',
                'departamento_id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 962,
                'nombre' => 'Taminango',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 963,
                'nombre' => 'Tangua',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 964,
                'nombre' => 'Taraira',
                'departamento_id' => 97,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 965,
                'nombre' => 'Tarazá',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 966,
                'nombre' => 'Tarqui',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 967,
                'nombre' => 'Tarso',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 968,
                'nombre' => 'Tasco',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 969,
                'nombre' => 'Tauramena',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 970,
                'nombre' => 'Tausa',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 971,
                'nombre' => 'Tello',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 972,
                'nombre' => 'Tena',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 973,
                'nombre' => 'Tenerife',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 974,
                'nombre' => 'Tenjo',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 975,
                'nombre' => 'Tenza',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 976,
                'nombre' => 'Teorama',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 977,
                'nombre' => 'Teruel',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 978,
                'nombre' => 'Tesalia',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 979,
                'nombre' => 'Tibacuy',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 980,
                'nombre' => 'Tibaná',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 981,
                'nombre' => 'Tibasosa',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 982,
                'nombre' => 'Tibirita',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 983,
                'nombre' => 'Tibú',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 984,
                'nombre' => 'Tierralta',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 985,
                'nombre' => 'Timaná',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 986,
                'nombre' => 'Timbiquí',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 987,
                'nombre' => 'Timbío',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 988,
                'nombre' => 'Tinjacá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 989,
                'nombre' => 'Tipacoque',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 990,
            'nombre' => 'Tiquisio (Puerto Rico)',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 991,
                'nombre' => 'Titiribí',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 992,
                'nombre' => 'Toca',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 993,
                'nombre' => 'Tocaima',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 994,
                'nombre' => 'Tocancipá',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 995,
                'nombre' => 'Toguí',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 996,
                'nombre' => 'Toledo',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 997,
                'nombre' => 'Toledo',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 998,
                'nombre' => 'Tolú',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 999,
                'nombre' => 'Tolú Viejo',
                'departamento_id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1000,
                'nombre' => 'Tona',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('municipios')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'nombre' => 'Topagá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1002,
                'nombre' => 'Topaipí',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1003,
                'nombre' => 'Toribío',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1004,
                'nombre' => 'Toro',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1005,
                'nombre' => 'Tota',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1006,
                'nombre' => 'Totoró',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1007,
                'nombre' => 'Trinidad',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1008,
                'nombre' => 'Trujillo',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1009,
                'nombre' => 'Tubará',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1010,
                'nombre' => 'Tuchín',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1011,
                'nombre' => 'Tulúa',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1012,
                'nombre' => 'Tumaco',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1013,
                'nombre' => 'Tunja',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1014,
                'nombre' => 'Tunungua',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1015,
                'nombre' => 'Turbaco',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1016,
                'nombre' => 'Turbaná',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1017,
                'nombre' => 'Turbo',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1018,
                'nombre' => 'Turmequé',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1019,
                'nombre' => 'Tuta',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1020,
                'nombre' => 'Tutasá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1021,
                'nombre' => 'Támara',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1022,
                'nombre' => 'Támesis',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1023,
                'nombre' => 'Túquerres',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1024,
                'nombre' => 'Ubalá',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1025,
                'nombre' => 'Ubaque',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1026,
                'nombre' => 'Ubaté',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1027,
                'nombre' => 'Ulloa',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1028,
                'nombre' => 'Une',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1029,
                'nombre' => 'Unguía',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1030,
            'nombre' => 'Unión Panamericana (ÁNIMAS)',
                'departamento_id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1031,
                'nombre' => 'Uramita',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1032,
                'nombre' => 'Uribe',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1033,
                'nombre' => 'Uribia',
                'departamento_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1034,
                'nombre' => 'Urrao',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1035,
                'nombre' => 'Urumita',
                'departamento_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1036,
                'nombre' => 'Usiacuri',
                'departamento_id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1037,
                'nombre' => 'Valdivia',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1038,
                'nombre' => 'Valencia',
                'departamento_id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1039,
                'nombre' => 'Valle de San José',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1040,
                'nombre' => 'Valle de San Juan',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1041,
                'nombre' => 'Valle del Guamuez',
                'departamento_id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1042,
                'nombre' => 'Valledupar',
                'departamento_id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1043,
                'nombre' => 'Valparaiso',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1044,
                'nombre' => 'Valparaiso',
                'departamento_id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1045,
                'nombre' => 'Vegachí',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1046,
                'nombre' => 'Venadillo',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1047,
                'nombre' => 'Venecia',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1048,
            'nombre' => 'Venecia (Ospina Pérez)',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1049,
                'nombre' => 'Ventaquemada',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1050,
                'nombre' => 'Vergara',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1051,
                'nombre' => 'Versalles',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1052,
                'nombre' => 'Vetas',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1053,
                'nombre' => 'Viani',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1054,
                'nombre' => 'Vigía del Fuerte',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1055,
                'nombre' => 'Vijes',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1056,
                'nombre' => 'Villa Caro',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1057,
                'nombre' => 'Villa Rica',
                'departamento_id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1058,
                'nombre' => 'Villa de Leiva',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1059,
                'nombre' => 'Villa del Rosario',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1060,
                'nombre' => 'Villagarzón',
                'departamento_id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1061,
                'nombre' => 'Villagómez',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1062,
                'nombre' => 'Villahermosa',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1063,
                'nombre' => 'Villamaría',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1064,
                'nombre' => 'Villanueva',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1065,
                'nombre' => 'Villanueva',
                'departamento_id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1066,
                'nombre' => 'Villanueva',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1067,
                'nombre' => 'Villanueva',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1068,
                'nombre' => 'Villapinzón',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1069,
                'nombre' => 'Villarrica',
                'departamento_id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1070,
                'nombre' => 'Villavicencio',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1071,
                'nombre' => 'Villavieja',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1072,
                'nombre' => 'Villeta',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1073,
                'nombre' => 'Viotá',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1074,
                'nombre' => 'Viracachá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1075,
                'nombre' => 'Vista Hermosa',
                'departamento_id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1076,
                'nombre' => 'Viterbo',
                'departamento_id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1077,
                'nombre' => 'Vélez',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1078,
                'nombre' => 'Yacopí',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1079,
                'nombre' => 'Yacuanquer',
                'departamento_id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1080,
                'nombre' => 'Yaguará',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1081,
                'nombre' => 'Yalí',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1082,
                'nombre' => 'Yarumal',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1083,
                'nombre' => 'Yolombó',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1084,
            'nombre' => 'Yondó (Casabe)',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1085,
                'nombre' => 'Yopal',
                'departamento_id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1086,
                'nombre' => 'Yotoco',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1087,
                'nombre' => 'Yumbo',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1088,
                'nombre' => 'Zambrano',
                'departamento_id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1089,
                'nombre' => 'Zapatoca',
                'departamento_id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1090,
            'nombre' => 'Zapayán (PUNTA DE PIEDRAS)',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1091,
                'nombre' => 'Zaragoza',
                'departamento_id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1092,
                'nombre' => 'Zarzal',
                'departamento_id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1093,
                'nombre' => 'Zetaquirá',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1094,
                'nombre' => 'Zipacón',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1095,
                'nombre' => 'Zipaquirá',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1096,
            'nombre' => 'Zona Bananera (PRADO - SEVILLA)',
                'departamento_id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1097,
                'nombre' => 'Ábrego',
                'departamento_id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1098,
                'nombre' => 'Íquira',
                'departamento_id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1099,
                'nombre' => 'Úmbita',
                'departamento_id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1100,
                'nombre' => 'Útica',
                'departamento_id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}