<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Code Freestyle',
                'email' => 'root@app.com',
                'password' => bcrypt('12345'),
                'rol' => 'admin'
            ],
            [
                'name' => 'Jhon Osorio',
                'email' => 'operador@app.com',
                'password' => bcrypt('12345'),
                'rol' => 'operador'
            ],
            [
                'name' => 'Stevenson Marquez Rangel',
                'email' => 'tecnico@app.com',
                'password' => bcrypt('12345'),
                'rol' => 'tecnico'
            ],
        ]);
    }
}
