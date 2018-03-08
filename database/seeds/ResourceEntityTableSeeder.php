<?php

use Illuminate\Database\Seeder;

class ResourceEntityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($x = 0; $x <= 50; $x++) {

            $course = App\Course::inRandomOrder()->first();
            $group = App\Group::inRandomOrder()->first();
            $event = App\Event::inRandomOrder()->first();
            $content = App\Content::inRandomOrder()->first();

            $group->content()->attach($content);
            $group->events()->attach($event);

            $event->groups()->attach($group);
            $event->content()->attach($content);

            $course->groups()->attach($group);
            $course->content()->attach($content);
            $course->events()->attach($event);
        }

    }
}
