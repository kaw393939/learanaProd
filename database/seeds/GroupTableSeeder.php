<?php

use Illuminate\Database\Seeder;

class GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\group::class, 500)->create()->each(function ($group) {
            $user = App\User::inRandomOrder()->first();
            $group->members()->attach($user, ['role_id' => 1]);
        });
    }
}
