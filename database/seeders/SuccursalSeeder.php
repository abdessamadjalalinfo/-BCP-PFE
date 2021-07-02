<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class SuccursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 30; $i++) {
            DB::table('succursals')->insert([

                'name' => Str::randomSuccursal(),
                'bpr_id' => rand(1, 6)


            ]);
        }
    }
}
