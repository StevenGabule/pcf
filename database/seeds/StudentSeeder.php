<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\{BirthAddress,
    Contact,
    ContactPerson,
    Course,
    EducationBackground,
    HomeAddress,
    LastSchool,
    Religion,
    Student,
    Tribe
};
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param Faker $faker
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::transaction(function () use ($faker) {
            $years = [2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020];
            $max = [300, 430, 550, 690, 580, 600, 340, 300, 314, 800];

            foreach ($years as $key => $year) {
                $data = [];
                for ($i = 1; $i <= $max[$key]; $i++) {
                    $gender = rand(1, 2);
                    $height = ["5'4", "5'3", "5'2", "5'6", "5'1", "5'7", "5'8", "5'9"];
                    $genRam = uniqid();
                    $last_name = $faker->lastName;

                    $data[] = [
                        'last_school_id' => rand(1,200),
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
                        'course_id' => Course::pluck('id')->random(),
                        'section' => rand(1, 5),
                        'year_enrolled' => $year,
                        'email' => $last_name .''.$genRam.''.$year.'@gmail.com',
                        'birth_address_id' => rand(1,200),// BirthAddress::pluck('id')->random(),
                        'home_address_id' =>  rand(1,200), // HomeAddress::pluck('id')->random(),
                        'contact_id' => rand(1,200), // Contact::pluck('id')->random(),
                        'contact_person_id' => rand(1,200), // ContactPerson::pluck('id')->random(),
                        'education_background_id' => rand(1,200), // EducationBackground::pluck('id')->random(),
                    ];
                }
                Student::insert($data);
            }
        });
    }
}
