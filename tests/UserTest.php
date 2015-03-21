<?php

use Laracasts\TestDummy\Factory;
use Laracasts\TestDummy\DbTestCase;


class UserTest extends DbTestCase {


    public function setUp() {

        parent:setUp();
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        echo "\n\r----------------------------------------";
        echo "\n\rSTART: testBasicExample()\n\r";

/*
        $user = Factory::create('Lasallecms\Usermanagement\Models\User');


        Factory::create('group_registered');
        Factory::create('group_administrator');
        Factory::create('group_super_administrator');

        Factory::create('user_group_registered');
        Factory::create('user_group_administrator');
        Factory::create('user_group_super_administrator');

*/

        // *** http://stackoverflow.com/questions/28009143/laravel-4-2-testing-with-assertredirectedtoroute-fails

        //$response = $this->call('POST', 'admin.login', ['email' => 'krugerbloom@rogers.com', 'password' => 'password']);
        //$this->assertRedirectedToRoute('admin.home');

        $response = $this->call('POST', 'admin.login', ['email' => 'krugerbloom@rogers.com', 'password' => 'password']);
        $this->assertRedirectedToRoute('admin.login');





        //dd($user->toArray());


    }



    public function tearDown()
    {
        parent::tearDown();
    }

}