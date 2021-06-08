<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\{BirthAddress, Contact, ContactPerson, EducationBackground, HomeAddress, LastSchool};
use Illuminate\Support\Facades\DB;
class StudentAdditionalInfo extends Seeder
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
                factory(LastSchool::class, $max[$key])->create();
                factory(BirthAddress::class, $max[$key])->create();
                factory(HomeAddress::class, $max[$key])->create();
                factory(Contact::class, $max[$key])->create();
                factory(ContactPerson::class, $max[$key])->create();
                factory(EducationBackground::class, $max[$key])->create();
            }
        });
    }
}
