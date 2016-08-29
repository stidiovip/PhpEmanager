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
        
        // Real object
        //$contactDao = new ContactDao();
        
        $contactDao = $this->getMockBuilder(ContactDao::class)->getMock();
        
        // mocked
        $contactDao->method('find')->willReturn( new Contact ('Nantes, France', '0606060606'));
        
        // expectations
        $contactDao->expects($this->once())->method('find');
        $this->appService = new AppService( $contactDao );
    }

    /**
     * @test
     */
    public function shoud_ensure_the_mock_is_well_done (){
        $contact = $this->appService->findContactByAddressAndPhone ( 'Nantes, France', '0606060606' );
        
        $this->assertNotNull ( $contact );
        $this->assertEquals( 'Nantes, France', $contact->getAddress());
        $this->assertEquals( '0606060606', $contact->getPhone());
    }

    /**
     * @after
     */
    public function after(){
        $this->appService = null;
    }
}