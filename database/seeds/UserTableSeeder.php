<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class, 100)->create()->each(function ($user) {
            $user->profile()->save(factory(App\Profile::class)->make());

            //$random = rand(0, 5);
            /*
            for($x = 0; $x <= $random; $x++) {

            }

            $random = rand(0, 5);

            for($x = 0; $x <= $random; $x++) {
                $user->groups()->save(factory(App\group::class)->make());
            }
            $random = rand(0, 10);
            for($x = 0; $x <= $random; $x++) {
                $user->events()->save(factory(App\event::class)->make());
            }
            $random = rand(0, 20);
            for($x = 0; $x <= $random; $x++) {
                $user->resources()->save(factory(App\Resource::class)->make());
            }
*/
        });
    }

}