<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param Faker $faker
     * @return void
     */
    public function run(Faker $faker)
    {
        $data = [
            [
                'user_type' => 0,
                'name' => 'John Paul L. Gabule',
                'avatar' => 'https://scontent.fcgy1-1.fna.fbcdn.net/v/t1.6435-9/139151903_3933803366638914_5915917624739314689_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=FPaeMBmOTBsAX9Pm-Oc&_nc_ht=scontent.fcgy1-1.fna&oh=6fd8852cfd7a75e1e07c6f073fc20271&oe=6091DF1A',
                'email' => 'lucasgabule@gmail.com',
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ],[
                'user_type' => 1,
                'name' => $faker->name,
                'avatar' => $faker->imageUrl(230, 200, 'cats', true, 'Faker', true),
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ],[
                'user_type' => 2,
                'name' => $faker->name,
                'avatar' => $faker->imageUrl(230, 200, 'cats', true, 'Faker', true),
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ],[
                'user_type' => 2,
                'name' => $faker->name,
                'avatar' => $faker->imageUrl(230, 200, 'cats', true, 'Faker', true),
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ],
        ];
        User::insert($data);
        factory(User::class, 5)->create();
    }
}
