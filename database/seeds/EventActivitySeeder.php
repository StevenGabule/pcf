<?php

use Illuminate\Database\Seeder;

class EventActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\EventActivity::class, 30)->create();
    }
}
