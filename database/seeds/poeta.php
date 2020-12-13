<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class poeta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('poets')->insert([
            'poet_code'=>'25',
            'first_name'=>'Amparo',
            'surname'=>'Amorós',
            'address'=>'Katrina Street #908',
            'postcode'=>'98324C',
            'telephone_number'=>'6591230985'
        ]);

        DB::table('poets')->insert([
            'poet_code'=>'23',
            'first_name'=>'Emily',
            'surname'=>'Dickson',
            'address'=>'Carolina Street #25',
            'postcode'=>'51367B',
            'telephone_number'=>'8618765290'
        ]);

        DB::table('poets')->insert([
            'poet_code'=>'24',
            'first_name'=>'Juana',
            'surname'=>'de Ibarbourou',
            'address'=>'Cali Street #56',
            'postcode'=>'89323A',
            'telephone_number'=>'9908765345'
        ]);

        DB::table('poets')->insert([
            'poet_code'=>'22',
            'first_name'=>'Maya',
            'surname'=>'Angelou',
            'address'=>'Arizona Street #33',
            'postcode'=>'51324A',
            'telephone_number'=>'9908765231'
        ]);

        DB::table('poets')->insert([
            'poet_code'=>'26',
            'first_name'=>'Sylvia',
            'surname'=>'Path',
            'address'=>'Pacheco Street #1098',
            'postcode'=>'67520A',
            'telephone_number'=>'6782309741'
        ]);
    }
}
