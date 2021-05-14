<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\EducationBackground;
use Faker\Generator as Faker;

$factory->define(EducationBackground::class, function (Faker $faker) {
    return [
        'primary_education' => $faker->sentence(6),
        'primary_school_year' => $faker->date(),
        'primary_school_address' => $faker->address,

        'secondary_education' => $faker->sentence(6),
        'secondary_school_year' => $faker->date(),
        'secondary_school_address' => $faker->address,
    ];
});
