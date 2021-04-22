<?php

use Illuminate\Database\Seeder;

class BiddingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Bidding::class, 10)->create();
    }
}
