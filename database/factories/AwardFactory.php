<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Award;
use Faker\Generator as Faker;

$factory->define(Award::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'file_attachment' => 'sample_precurement.pdf',
        'download' => rand(100,200)
    ];
});
