<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'globe_tm' => $faker->phoneNumber,
        'smart_tnt_sun' =>$faker->phoneNumber,
        'landline' => $faker->e164PhoneNumber,
        'social_facebook' => $faker->companyEmail
    ];
});
