<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SchoolItem;
use Faker\Generator as Faker;

$factory->define(SchoolItem::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'description' => $faker->paragraph(4, true),
        'unit' => 'pcs',
        'qty' => rand(10, 50),
        'status' => rand(0, 1),
    ];
});
