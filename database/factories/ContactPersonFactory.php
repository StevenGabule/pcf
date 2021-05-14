<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ContactPerson;
use Faker\Generator as Faker;

$factory->define(ContactPerson::class, function (Faker $faker) {
    $last_name = $faker->lastName;
    return [
        'father_first_name' => $faker->firstNameMale,
        'father_last_name' => $last_name,
        'father_home_address' => $faker->address,
        'father_contact_no' => $faker->phoneNumber,
        'father_occupation' => $faker->jobTitle,

        'mother_first_name' => $faker->firstNameFemale,
        'mother_last_name' => $last_name,
        'mother_home_address' => $faker->address,
        'mother_contact_no' => $faker->phoneNumber,
        'mother_occupation' => $faker->jobTitle,

        'contact_first_name' => $faker->firstName,
        'contact_last_name' => $faker->lastName,
        'contact_home_address' => $faker->address,
        'contact_contact_no' => $faker->phoneNumber,
        'contact_relation' => 'Brother/Sister',
        'contact_for_emergency' => 'Yes',
    ];
});
