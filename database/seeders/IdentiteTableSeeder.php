<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class IdentiteTableSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 30; $i++) {
            DB::table('identites')->insert([
                'type' => 'CIN',
                'numero' => Str::random(100),
                'nom_sur_piece' => Str::randomName(),
                'lieu_delivrance' => 'Casablanca',
                'date_delivrance' => date("d M Y", mt_rand(1, time())),
                'date_fin_validite' => date("d M Y", mt_rand(1, time())),
                'code_tribunal' => Str::random(10),
                'code_convention' => Str::random(10),
            ]);
        }
    }
}
