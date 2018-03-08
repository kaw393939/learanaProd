<?php

use Illuminate\Database\Seeder;

class ContentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('content_types')->insert([
            'id' => 1,
            'type' => 'Video',
        ]);
        DB::table('content_types')->insert([
            'id' => 2,
            'type' => 'Text',
        ]);
    }
}
