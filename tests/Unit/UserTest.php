<?php

namespace Tests\Unit;
use App\Group;
use Tests\TestCase;
use App\User;
use App\Profile;
use PHPUnit\Framework\Constraint\IsType;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


    //____ Count all associate groups of random user
    public function testGroupCount()
    {
        //Get a User
        $user = User::inRandomOrder()->first();
        //get the group count
        $count = $user->groups()->count();
        //Check the group count is an integercd
        $this->assertInternalType("int", $count);

    }

    //____ Count all associate courses of random user
    public function testCourseCount()
    {
        //Get a User
        $user = User::inRandomOrder()->first();
        //get the group count
        $count = $user->courses()->count();
        //Check the group count is an integer
        $this->assertInternalType("int", $count);
    }

    //____ Count all associate events of random user
    public function testEventCount()
    {
        //Get a User
        $user = User::inRandomOrder()->first();
        //get the group count
        $count = $user->events()->count();
        //Check the group count is an integer
        $this->assertInternalType("int", $count);
    }











//_________________________ Test with Fixed User Data

    //_____ Delete test User
    public function testDeleteUser()
    {
        User::where('email', 'test@test.com')->delete();
        $this->assertDatabaseMissing('users', ['email' => 'test@test.com']);

    }

    //_____ Delete test User Associated
    public function testDeleteProfile()
    {
        Profile::where('fname', 'kevin123')->delete();
        $this->assertDatabaseMissing('users', ['email' => 'test@test.com']);
    }

    //_____ Add test User
    public function testAddUser()
    {
        factory(User::class)
            ->create([
                'email' => 'test@test.com',
                'role' => '1',

            ])
            ->profile()
            ->save(factory(Profile::class)->make([
                'fname' => 'kevin123',
                'lname' => 'test',
                'birthday' => '1992-06-09 00:00:00',
            ]));
        $this->assertDatabaseHas('users', ['email' => 'test@test.com']);

    }

    //_____ Test Users Name
    public function testUserName()
    {
        $user = User::where('email', 'test@test.com')->first();
        $userProfile = Profile::where('user_id', $user->id)->first();
        $this->assertEquals($userProfile->fname, 'kevin123');
    }

    //_____ Test Users Birthday
    public function testUserBirthday()
    {
        $user = User::where('email', 'test@test.com')->first();
        $userProfile = Profile::where('user_id', $user->id)->first();
        $this->assertEquals($userProfile->birthday, '1992-06-09');
    }

    //_____ Test Users Role
    public function testUserRole()
    {
        $user = User::where('email', 'test@test.com')->first();
        $this->assertEquals($user->role, '1');
    }

    //_____ Add Test Users to Groups
    public function testAddUserGroups()
    {
        factory(Group::class, 2)->create()->each(function ($group) {
            $user = User::where('email', 'test@test.com')->first();
            $group->members()->attach($user, ['role_id' => 1]);
        });
        $user = User::where('email', 'test@test.com')->first();

        if ($user->groups()->count() > 0) {
            $test = true;
        } else {
            $test = false;
        }
        $this->assertTrue($test);
    }

    //_____ Get Name ID of GROUP test string
    public function testUserGroupName()
    {
        $user = User::where('email', 'test@test.com')->first();
        $group = $user->groups()->first()->title;
        $this->assertTrue(is_string($group));
    }


    public function testEmailPref()
    {
        //Get a User
        $user = User::inRandomOrder()->first();
        //get the group count
        $profile = $user->profile;//Check the group count is an integercd
        $emailPref = (int)$profile->email;
        $this->assertInternalType("int", $emailPref);

    }
    //____ Count all associate courses of random user




}
