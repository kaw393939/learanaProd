<?php

use Illuminate\Database\Seeder;

class EventTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_types')->insert([
            'id' => 1,
            'type' => 'Course Meeting',
        ]);
        DB::table('event_types')->insert([
            'id' => 2,
            'type' => 'Webconference',
        ]);
        DB::table('event_types')->insert([
            'id' => 3,
            'type' => 'In Person',
        ]);
    }
}
