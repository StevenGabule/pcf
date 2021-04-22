<?php

use Illuminate\Database\Seeder;

class ReportProcurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\ReportProcurement::class, 20)->create();
    }
}
