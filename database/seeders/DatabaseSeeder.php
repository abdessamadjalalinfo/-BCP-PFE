<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([IdentiteTableSeeder::class]);
        $this->call([BprSeeder::class]);
        $this->call([SuccursalSeeder::class]);
    }
}
