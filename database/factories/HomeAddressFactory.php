<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Barangay;
use App\Models\City;
use App\Models\HomeAddress;
use App\Models\Province;
use Faker\Generator as Faker;

$factory->define(HomeAddress::class, function (Faker $faker) {
    return [
        'home_province_id' => Province::pluck('id')->random(),
        'home_city_id' => City::pluck('id')->random(),
        'home_barangay_id' => Barangay::pluck('id')->random(),
        'home_street_name' => $faker->streetAddress,
        'home_postal_code' => $faker->postcode
    ];
});
