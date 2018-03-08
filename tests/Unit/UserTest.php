<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
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
    public function testGroupCount()
    {
        //Get a User
        $user = User::inRandomOrder()->first();
        //get the group count
        $count = $user->groups()->count();
        //Check the group count is an integercd
        $this->assertInternalType("int", $count);

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

}
