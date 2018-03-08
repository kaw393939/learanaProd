<?php

use Illuminate\Database\Seeder;

class EntityRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entity_roles')->insert([
            'id' => 1,
            'role' => 'Owner',
        ]);
        DB::table('entity_roles')->insert([
            'id' => 2,
            'role' => 'Editor',
        ]);
        DB::table('entity_roles')->insert([
            'id' => 3,
            'role' => 'View',
        ]);
    }
}
