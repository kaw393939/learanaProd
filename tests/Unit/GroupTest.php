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
        Group::where('title', 'testTitle123')->delete();
        $this->assertDatabaseMissing('groups', ['title' => 'testTitle123']);

    }

    //_____ Create test Group
    public function testCreateGroup()
    {
        factory(Group::class)
            ->create([
                'title' => 'testTitle123',
                'description' => 'testDescription123',
                'groupType_id' => '1',
                'active' => '1'
            ]);
        $this->assertDatabaseHas('groups', ['title' => 'testTitle123']);

    }

    //_____ Get test Group Name

    public function testGetName()
    {
        $group = Group::where('title', 'testTitle123')->first();
        $this->assertEquals($group->title, 'testTitle123');
    }

    //_____ Get test Group Description

    public function testGetDescription()
    {
        $group = Group::where('description', 'testDescription123')->first();
        $this->assertEquals($group->description, 'testDescription123');
    }


}
