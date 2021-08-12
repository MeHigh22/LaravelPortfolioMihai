<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            [
                "clients"   => 20000,
                "projets"   => 590,
                "support"   => 200,
                "workers"   => 20,
                "created_at"    => now(),
            ],
        ]);
    }
}
