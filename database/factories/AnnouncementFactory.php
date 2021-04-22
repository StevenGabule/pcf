<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Announcement;
use Faker\Generator as Faker;

/* $table->string('name');
    $table->string('purpose')->nullable();
    $table->text('description');
    $table->unsignedTinyInteger('status')->comment('1-important|2-less-important');*/
$factory->define(Announcement::class, function (Faker $faker) {
    return [
        'name' => $faker->paragraph(1),
        'purpose' => $faker->paragraph(2),
        'description' => $faker->paragraph(10),
        'status' => 1
    ];
});
