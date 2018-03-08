<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Course::class, 200)->create()->each(function ($course) {
            $user = App\User::inRandomOrder()->first();
            $course->enrollment()->attach($user, ['role_id' => 1]);
        });
    }
}
