<?php

use App\Models\Municipality;
use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipality = [
            [
                'name' => 'Valencia City',
                'province_id' => 1,
            ],
            [
                'name' => 'Malaybalay City',
                'province_id' => 1,
            ]
        ];

        Municipality::insert($municipality);
    }
}
