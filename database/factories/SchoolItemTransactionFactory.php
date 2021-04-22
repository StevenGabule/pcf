<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\{SchoolItem, SchoolItemTransaction, Student};
use Faker\Generator as Faker;

$factory->define(SchoolItemTransaction::class, function (Faker $faker) {
    return [
        'school_item_id' => SchoolItem::pluck('id')->random(),
        'qty' => rand(1,10),
        'student_id' => Student::pluck('id')->random(),
        'purpose' => $faker->paragraph(1, false),
        'status' => rand(0,1),
        'date_return' => $faker->dateTime,
    ];
});
