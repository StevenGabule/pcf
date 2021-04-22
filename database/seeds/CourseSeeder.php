<?php

use App\Models\Course;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param Faker $faker
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('courses')->truncate();
        $data = [
            [
                'title' => 'Bachelor of Science in Information Technology',
                'slug' => Str::slug('Bachelor of Science in Information Technology'),
                'nick_name' =>'Information Technology',
                'description' => $faker->paragraph(5, true),
                'short_description' => $faker->paragraph(2, false),
                'estimated_time' => rand(100, 400),
                'type' => 4,
            ], [
                'title' => 'Bachelor of Science in Computer Science',
                'slug' => Str::slug('Bachelor of Science in Computer Science'),
                'nick_name' => 'Computer Science',
                'description' => $faker->paragraph(5, true),
                'short_description' => $faker->paragraph(2, false),
                'estimated_time' => rand(75, 300),
                'type' => 4,
            ], [
                'title' => 'Bachelor of Science in Information Management',
                'slug' => Str::slug('Bachelor of Science in Information Management'),
                'nick_name' => 'Information Management',
                'description' => $faker->paragraph(5, true),
                'short_description' => $faker->paragraph(2, false),
                'estimated_time' => rand(75, 300),
                'type' => 4,
            ], [
                'title' => 'Bachelor of Science in Business Administration',
                'slug' => Str::slug('Bachelor of Science in Business Administration'),
                'nick_name' => 'Business Administration',
                'description' => $faker->paragraph(5, true),
                'short_description' => $faker->paragraph(2, false),
                'estimated_time' => rand(75, 300),
                'type' => 4
            ], [
                'title' => 'ACCOUNTING , BUSINESS AND MANAGEMENT',
                'slug' => Str::slug('ACCOUNTING , BUSINESS AND MANAGEMENT'),
                'nick_name' => 'ACCOUNTING',
                'description' => $faker->paragraph(5, true),
                'short_description' => $faker->paragraph(2, false),
                'estimated_time' => rand(75, 300),
                'type' => 4,
            ], [
                'title' => 'COMPUTER SYSTEMS AND NETWORK TECHNOLOGY',
                'slug' => Str::slug('COMPUTER SYSTEMS AND NETWORK TECHNOLOGY'),
                'nick_name' => 'NETWORK STRATEGIES',
                'description' => $faker->paragraph(5, true),
                'short_description' => $faker->paragraph(2, false),
                'estimated_time' => rand(75, 300),
                'type' => 2,
            ], [
                'title' => 'COMPUTER SYSTEMS DESIGN AND PROGRAMMING ',
                'slug' => Str::slug('COMPUTER SYSTEMS DESIGN AND PROGRAMMING '),
                'nick_name' =>'SYSTEMS DESIGN',
                'description' => $faker->paragraph(5, true),
                'short_description' => $faker->paragraph(2, false),
                'estimated_time' => rand(75, 300),
                'type' => 1,
            ], [
                'title' => 'COMPUTER-BASED ACCOUNTANCY',
                'slug' => Str::slug('COMPUTER-BASED ACCOUNTANCY'),
                'nick_name' => 'COMPUTER-BASED ACCOUNTANCY',
                'description' => $faker->paragraph(5, true),
                'short_description' => $faker->paragraph(2, false),
                'estimated_time' => rand(75, 300),
                'type' => 1,
            ], [
                'title' => 'TVL ANIMATION AND VISUAL GRAPHIC DESIGN',
                'slug' => Str::slug('TVL ANIMATION AND VISUAL GRAPHIC DESIGN\''),
                'nick_name' => 'ANIMATOR',
                'description' => $faker->paragraph(5, true),
                'short_description' => $faker->paragraph(2, false),
                'estimated_time' => rand(75, 300),
                'type' => 1,
            ], [
                'title' => 'TVL NETWORK CSS',
                'slug' => Str::slug('TVL NETWORK CSS'),
                'nick_name' => 'NETWORK CSS',
                'description' => $faker->paragraph(5, true),
                'short_description' => $faker->paragraph(2, false),
                'estimated_time' => rand(75, 300),
                'type' => 1,
            ], [
                'title' => 'TVL PROGRAMMING',
                'slug' => Str::slug('TVL PROGRAMMING'),
                'nick_name' => 'PROGRAMMING',
                'description' => $faker->paragraph(5, true),
                'short_description' => $faker->paragraph(2, false),
                'estimated_time' => rand(75, 300),
                'type' => 1
            ]
        ];
        Course::insert($data);
    }
}
