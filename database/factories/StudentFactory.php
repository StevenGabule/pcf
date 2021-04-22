<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\{Barangay,
    BirthAddress,
    City,
    Contact,
    ContactPerson,
    EducationBackground,
    HighSchool,
    HomeAddress,
    LastSchool,
    Province,
    Religion,
    Student,
    Tribe};
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    $gender = rand(1, 2);
    $height = ["5'4", "5'3", "5'2", "5'6", "5'1", "5'7", "5'8", "5'9"];
    $last_name = $faker->lastName;
    return [
        'last_school_id' => function () use ($faker) {
            $last_school = LastSchool::create([
                'high_school_id' => HighSchool::pluck('id')->random(),
                'year_last_attended' => $faker->date(),
                'lrn' => $faker->randomNumber
            ]);
            return $last_school['id'];
        },
        'first_name' => $gender === 1 ? $faker->firstNameMale : $faker->firstNameFemale,
        'last_name' => $last_name,
        'gender' => $gender,
        'nick_name' => $faker->word,
        'birthday' => $faker->date,
        'civil_status' => rand(1, 13),
        'religion_id' => Religion::pluck('id')->random(),
        'tribe_id' => Tribe::pluck('id')->random(),
        'height' => $height[rand(0, 6)],
        'weight' => rand(40, 80),
        'blood_type' => $faker->randomLetter,
        'citizenship' => 'Filipino',
        'email' => $faker->freeEmail,
        'birth_address_id' => function () use ($faker) {
            $birth_address = BirthAddress::create([
                'birth_province_id' => Province::pluck('id')->random(),
                'birth_city_id' => City::pluck('id')->random(),
                'birth_barangay_id' => Barangay::pluck('id')->random(),
                'birth_street' => $faker->streetAddress
            ]);
            return $birth_address['id'];
        },
        'home_address_id' => function () use ($faker) {
            $home_address = HomeAddress::create([
                'home_province_id' => Province::pluck('id')->random(),
                'home_city_id' => City::pluck('id')->random(),
                'home_barangay_id' => Barangay::pluck('id')->random(),
                'home_street_name' => $faker->streetAddress,
                'home_postal_code' => $faker->postcode
            ]);
            return $home_address['id'];
        },
        'contact_id' => function () use ($faker) {
            $contact = Contact::create([
                'globe_tm' => $faker->phoneNumber,
                'smart_tnt_sun' =>$faker->phoneNumber,
                'landline' => $faker->e164PhoneNumber,
                'social_facebook' => $faker->companyEmail
            ]);
            return $contact['id'];
        },
        'contact_person_id' => function () use ($faker, $last_name) {
            $contact_person = ContactPerson::create([
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
            ]);
            return $contact_person['id'];
        },
        'education_background_id' => function () use ($faker) {
            $contact_person = EducationBackground::create([
                'primary_education' => $faker->sentence(6),
                'primary_school_year' => $faker->date(),
                'primary_school_address' => $faker->address,

                'secondary_education' => $faker->sentence(6),
                'secondary_school_year' => $faker->date(),
                'secondary_school_address' => $faker->address,
            ]);
            return $contact_person['id'];
        },
    ];
});
