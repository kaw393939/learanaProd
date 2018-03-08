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
        $this->call([
            SystemRolesTableSeeder::class,
            EntityRoleTableSeeder::class,
            CourseTypesTableSeeder::class,
            EventTypesTableSeeder::class,
            GroupTypesTableSeeder::class,
            ContentTypesTableSeeder::class,
            UserTableSeeder::class,
            CourseTableSeeder::class,
            GroupTableSeeder::class,
            EventTableSeeder::class,
            ContentTableSeeder::class,
            ResourceEntityTableSeeder::class,



        ]);

    }
}
