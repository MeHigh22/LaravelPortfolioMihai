<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                "location"  => "United States of Arouf",
                "email"     => "pmihai31@gmail.com",
                "call"      => "488958559",
                "created_at"    => now(),
            ],
        ]);
    }
}
