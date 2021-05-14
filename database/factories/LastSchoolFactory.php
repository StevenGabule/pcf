<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\HighSchool;
use App\Models\LastSchool;
use Faker\Generator as Faker;

$factory->define(LastSchool::class, function (Faker $faker) {
    return [
        'high_school_id' => HighSchool::pluck('id')->random(),
        'year_last_attended' => $faker->date(),
        'lrn' => $faker->randomNumber
    ];
});
