<?php

use Illuminate\Database\Seeder;

class SystemRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('system_roles')->insert([
            'id' => 1,
            'type' => 'Admin',
        ]);
        DB::table('system_roles')->insert([
            'id' => 2,
            'type' => 'Customer',
        ]);
        DB::table('system_roles')->insert([
            'id' => 3,
            'type' => 'User',
        ]);

    }
}
