<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleDatabaseTest extends TestCase
{
	use DatabaseTransactions;
	use RefreshDatabase;

   /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        //$this->assertTrue(true);

		$user = factory(\App\User::class, 1)->create();
		dump($user);
		$this->assertEquals($user->id, 1);

    }
}
