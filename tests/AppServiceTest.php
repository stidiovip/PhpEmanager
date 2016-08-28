<?php

/**
 * Created by PhpStorm.
 * User: Tidiane
 * Date: 28/08/2016
 * Time: 22:01
 */
class AppServiceTest extends PHPUnit_Framework_TestCase
{
    private $appService;

    /**
     * @before
     */
    public function before(){
        $this->appService = new AppService( new ContactDao() );
    }

    /**
     * @test
     */
    public function should_add_a_new_contact (){
        $this->assertTrue( count(Db::$contacts) == 0);
        $this->appService->addContact ( new Contact( "Nantes, France", "0604050607" ) );

        $this->assertTrue( count(Db::$contacts) == 1);
        $contact = $this->appService->findContactByAddressAndPhone ( "Nantes, France", "0604050607" );
        $this->assertNotNull($contact);
    }

    /**
     * @after
     */
    public function after(){
        $this->appService = null;
    }
}