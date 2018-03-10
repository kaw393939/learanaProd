<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Group;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GroupTest extends TestCase
{
//_________________________ Test with Random Group Data

    //____ Count all groups
    public function testGroupCount()
    {
        $groups = Group::all()->count();
        //dd('group count = '.$groups);
        $this->assertInternalType("int", $groups);
    }



//_________________________ Test with Fixed Group Data
    //_____ Delete test Group
    public function testDeleteUser()
    {
<<<<<<< HEAD
        Group::where('title', 'testTitle123')->delete();
        $this->assertDatabaseMissing('groups', ['title' => 'testTitle123']);

    }

=======
        Group::where('title','testTitle123')->delete();
        $this->assertDatabaseMissing('groups', ['title' => 'testTitle123']);

    }
>>>>>>> kevinUnitTest
    //_____ Create test Group
    public function testCreateGroup()
    {
        factory(Group::class)
<<<<<<< HEAD
            ->create([
                'title' => 'testTitle123',
                'description' => 'testDescription123',
                'groupType_id' => '1',
                'active' => '1'
            ]);
        $this->assertDatabaseHas('groups', ['title' => 'testTitle123']);

    }

=======
                ->create([
                    'title' => 'testTitle123',
                    'description' => 'testDescription123',
                    'groupType_id' => '1',
                    'active' => '1'
                ]);
         $this->assertDatabaseHas('groups', ['title' => 'testTitle123']);

    }
>>>>>>> kevinUnitTest
    //_____ Get test Group Name

    public function testGetName()
    {
<<<<<<< HEAD
        $group = Group::where('title', 'testTitle123')->first();
        $this->assertEquals($group->title, 'testTitle123');
    }

=======
        $group = Group::where('title','testTitle123')->first();
        $this->assertEquals($group->title, 'testTitle123');
    }
>>>>>>> kevinUnitTest
    //_____ Get test Group Description

    public function testGetDescription()
    {
<<<<<<< HEAD
        $group = Group::where('description', 'testDescription123')->first();
=======
        $group = Group::where('description','testDescription123')->first();
>>>>>>> kevinUnitTest
        $this->assertEquals($group->description, 'testDescription123');
    }


}
