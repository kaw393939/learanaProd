<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(App\User::class, 100)->create()->each(function ($user) {
            $random = rand(1, 10);
            $user->profile()->save(factory(App\Profile::class)->make());

            for($x = 0; $x <= $random; $x++) {
                $user->courses()->save(factory(App\Course::class)->make());
            }

        });
    }
}
