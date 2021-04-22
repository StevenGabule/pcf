<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Bidding;
use Faker\Generator as Faker;

/* $table->string('name');
$table->text('description');
$table->string('date_process');
$table->string('file_attachment')->nullable();*/
$factory->define(Bidding::class, function (Faker $faker) {
    return [
        'name' => $faker->paragraph,
        'description' => $faker->paragraph(random_int(10, 15), true),
        'date_process' => \Carbon\Carbon::now(),
    ];
});
