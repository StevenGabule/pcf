<?php

use App\Models\SchoolItem;
use Illuminate\Database\Seeder;

class SchoolItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SchoolItem::class, 1000)->create();
    }
}
