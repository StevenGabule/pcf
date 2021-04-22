<?php

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
             TribeSeeder::class,
             ReligionSeeder::class,
             ProvinceSeeder::class,
             CitySeeder::class,
             BarangaySeeder::class,
             HighSchoolSeeder::class,
             StudentSeeder::class,
             UserSeeder::class,
         ]);
    }
}
