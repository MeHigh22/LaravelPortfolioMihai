<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            [
                "language"        => "html",
                "percent"        => 100,
                "created_at"    => now(),
            ],
            [
                "language"        => "css",
                "percent"        => 90,
                "created_at"    => now(),
            ],
            [
                "language"        => "js",
                "percent"        => 80,
                "created_at"    => now(),
            ],
            [
                "language"        => "php",
                "percent"        => 70,
                "created_at"    => now(),
            ],
            [
                "language"        => "wordpress",
                "percent"        => 50,
                "created_at"    => now(),
            ],
            [
                "language"        => "photoshop",
                "percent"        => 100,
                "created_at"    => now(),
            ],
        ]);
    }
}
