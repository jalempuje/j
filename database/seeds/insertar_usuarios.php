<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class insertar_usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'Usuario'=>'jalempuje',
            'password'=>'12345',
            'key'=>'mamijale'
        ]);
    }
}
