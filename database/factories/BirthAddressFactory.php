<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Models\Barangay;
use App\Models\BirthAddress;
use App\Models\City;
use App\Models\Province;
use Faker\Generator as Faker;

$factory->define(BirthAddress::class, function (Faker $faker) {
    return [
        'birth_province_id' => Province::pluck('id')->random(),
        'birth_city_id' => City::pluck('id')->random(),
        'birth_barangay_id' => Barangay::pluck('id')->random(),
        'birth_street' => $faker->streetAddress
    ];
});
