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
        $this->call([
            AboutSeeder::class,
            SkillsSeeder::class,
            ContactSeeder::class,
            PortfolioSeeder::class,
            FactSeeder::class,
            ServiceSeeder::class,
            ImageSeeder::class,
        ]);
    }
}
