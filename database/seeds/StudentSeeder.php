<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\{Barangay,
    BirthAddress,
    City,
    Contact,
    ContactPerson,
    Course,
    EducationBackground,
    HighSchool,
    HomeAddress,
    LastSchool,
    Province,
    Religion,
    Student,
    Tribe};

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
        $years = [2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020];
        $max = [300, 430, 550, 690, 580, 600, 340, 300, 314, 800];

        /*foreach ($years as $year => $key) {
            $data = [];
            for ($i = 1; $i <= $max[$year]; $i++) {
                $gender = rand(1, 2);
                $height = ["5'4", "5'3", "5'2", "5'6", "5'1", "5'7", "5'8", "5'9"];
                $last_name = $faker->lastName;
                $that =& $this;
                $data[] =  [
                    'last_school_id' => function () use ($that) {
                        return factory(LastSchool::class)->create()->id;
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
                    'course_id' => Course::pluck('id')->random(),
                    'section' => rand(1,5),
                    'year_enrolled' => 2014,
                    'email' => $faker->safeEmail,
                    'birth_address_id' => function () {
                        return factory(BirthAddress::class)->create()->id;
                    },
                    'home_address_id' => function ()  {
                        return factory(HomeAddress::class)->create()->id;
                    },
                    'contact_id' => function () {
                        return factory(Contact::class)->create()->id;
                    },
                    'contact_person_id' => function () {
                        return factory(ContactPerson::class,1)->create()->id;
                    },
                    'education_background_id' => function () {
                        factory(EducationBackground::class)->create()->id;
                    },
                ];
            }
          Student::insert($data);
        }*/
    }
}
