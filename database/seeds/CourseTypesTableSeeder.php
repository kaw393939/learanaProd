<?php

use Illuminate\Database\Seeder;

class CourseTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('course_types')->insert([
            'id' => 1,
            'type' => 'Short',
        ]);
        DB::table('course_types')->insert([
            'id' => 2,
            'type' => 'Long',
        ]);
        DB::table('course_types')->insert([
            'id' => 3,
            'type' => 'NA',
        ]);

    }
}
