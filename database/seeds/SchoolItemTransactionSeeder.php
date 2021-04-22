<?php

use App\Models\SchoolItemTransaction;
use Illuminate\Database\Seeder;

class SchoolItemTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SchoolItemTransaction::class, 100)->create();
    }
}
