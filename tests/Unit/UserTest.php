<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\User;
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
        //Check the group count is an integer
        $this->assertInternalType("int", $count);

    }

}
