<?php

use App\Models\{Barangay, Province};
use Illuminate\Database\Seeder;

class HighSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
          [
              'name' => 'ACLC College of Bukidnon',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'ACLC-ANTIPOLO',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'ALEMARZ School Of Science and Technology',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'ALS',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'Ama Online',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'ARAULIO UNIVERSTIY',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'ATENEO DE DAVAO',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'Bacusanon National High School',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'Badas National High School',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'Bangcud National High School',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'BANISILAN NATIONAL HIGH SCHOOL',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'Batist Busco Academy',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'BLESSED MOTHER COLLEGE',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'Bocboc National High School',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'BRETHREN EVANGELICAL SCHOOL OF THEOLOGY INTERNATIONAL',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'Bugcaon National High School',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'Bukidnon Faith Christian School, Inc.',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'Bukidnon National High School',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'Bukidnon National High School - Aglayan Annex',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'Bukidnon National High School - San Jose Annex',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'Bukidnon National School of Home Industries',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'Bukidnon State University',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'BUSCO Academy',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
          [
              'name' => 'Cabugnason National High School',
              'province_id' => Province::pluck('id')->random(),
              'barangay_id' => Barangay::pluck('id')->random(),
              'division_id' => 1,
              'school_type' => rand(1,2),
          ],
        ];
        \App\Models\HighSchool::insert($data);
    }
}
