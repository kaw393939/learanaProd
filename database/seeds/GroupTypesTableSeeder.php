<?php

use Illuminate\Database\Seeder;

class GroupTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_types')->insert([
            'id' => 1,
            'type' => 'Course',
        ]);
        DB::table('group_types')->insert([
            'id' => 2,
            'type' => 'Discussion',
        ]);
        DB::table('group_types')->insert([
            'id' => 3,
            'type' => 'Event Discussion',
        ]);
    }
}
