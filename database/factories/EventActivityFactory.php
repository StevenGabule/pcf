<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\EventActivity;
use Faker\Generator as Faker;

$factory->define(EventActivity::class, function (Faker $faker) {
    return [
        'name' => $faker->paragraph,
        'description' => $faker->paragraph(10, true),
        'date_start' => $faker->dateTime,
        'location' => $faker->address
    ];
});
