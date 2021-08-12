<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                "icon" =>  "icofont-computer",
                "title" =>  "Lorem ips Ipsum",
                "text" =>  "Lorem ips",
                "created_at" => now(),
            ],
            [
                "icon" =>  "icofont-chart-bar-graph",
                "title" =>  "Dolor Sitema",
                "text" =>  "Lorem ips",
                "created_at" => now(),
            ],
            [
                "icon" =>  "icofont-earth",
                "title" =>  "Sed ut perspiciatis",
                "text" =>  "Lorem ips",
                "created_at" => now(),
            ],
            [
                "icon" =>  "icofont-image",
                "title" =>  "Magni Dolores",
                "text" =>  "Lorem ips",
                "created_at" => now(),
            ],
            [
                "icon" =>  "icofont-settings",
                "title" =>  "Nemo Enim",
                "text" =>  "Lorem ips",
                "created_at"  => now(),
            ],
            [
                "icon" =>  "icofont-tasks-alt",
                "title" =>  "Eiusmod Tempor",
                "text" =>  "Lorem ips",
                "created_at"  => now(),
            ],
        ]);
    }
}
