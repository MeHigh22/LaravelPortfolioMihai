<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            [
                "birthday" => "22 Novembre 1997",
                "website" => "www.aroufdevelopah.com",
                "phone" => "+32 488 958 559",
                "city" => "Malta",
                "age" => "23",
                "degree" => "Diplome de la Street ",
                "email" => "pmihai31@gmail.com",
                "freelance" => "Pour la bonne somme",
                "created_at" => now(),
            ]
            ]);
    }
}
