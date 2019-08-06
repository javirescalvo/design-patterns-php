<?php

namespace Styde\Tests\Feature;

use Styde\Tests\TestCase;
use Styde\Models\User;

class UserTest extends TestCase
{
    /** @test */
    function a_user_can_see_its_details()
    {

        $user = $this->createUser([
            'name' => 'Duilio',
        ]);

        $this->assertSame('Duilio', $user->name);
//        $this->get('my-profile')
//            ->assertSee('Duilio');
    }

    /** @test */
    function a_user_can_see_its_admin_status()
    {

        $user = $this->createUser([
            'name' => 'Duilio',
            'is_admin' => true
        ]);

        $user->is_admin = true;

        $user->save();

        $this->assertSame('Duilio', $user->name);
        $this->assertTrue($user->is_admin);
//        $this->get('my-profile')
//            ->assertSee('Duilio');
    }


}
