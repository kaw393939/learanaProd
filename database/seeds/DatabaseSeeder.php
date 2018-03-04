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
            EventTypesTableSeeder::class,
            SystemRolesTableSeeder::class,
            CourseRoleTableSeeder::class,
            EventRoleTableSeeder::class,
            GroupRoleTableSeeder::class,
            CourseTypesTableSeeder::class,
            GroupTypesTableSeeder::class,
            UserTableSeeder::class,
            EnrollmentTableSeeder::class,
            CourseResourceTableSeeder::class,
            GroupMembershipTableSeeder::class,
            EventAttendeesTableSeeder::class,


        ]);

    }
}
