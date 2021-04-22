<?php

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Baungon',
                'province_id' => 1
            ],
            [
                'name' => 'Cabanglasan',
                'province_id' => 1
            ], [
                'name' => 'Valencia City',
                'province_id' => 1
            ], [
                'name' => 'Talakag',
                'province_id' => 1
            ], [
                'name' => 'Sumilao',
                'province_id' => 1
            ], [
                'name' => 'San Fernando',
                'province_id' => 1
            ], [
                'name' => 'Quezon',
                'province_id' => 1
            ], [
                'name' => 'Pangantucan',
                'province_id' => 1
            ], [
                'name' => 'Maramag',
                'province_id' => 1
            ], [
                'name' => 'Manolo Fortich',
                'province_id' => 1
            ], [
                'name' => 'Kibawe',
                'province_id' => 1
            ], [
                'name' => 'Malaybalay City',
                'province_id' => 1
            ], [
                'name' => 'Libona',
                'province_id' => 1
            ], [
                'name' => 'Lantapan',
                'province_id' => 1
            ], [
                'name' => 'Kalilangan',
                'province_id' => 1
            ], [
                'name' => 'Malitbog',
                'province_id' => 1
            ], [
                'name' => 'Kadingilan',
                'province_id' => 1
            ], [
                'name' => 'Impasug-Ong',
                'province_id' => 1
            ], [
                'name' => 'Dangcagan',
                'province_id' => 1
            ], [
                'name' => 'Damulog',
                'province_id' => 1
            ],
        ];
        City::insert($data);
    }
}
