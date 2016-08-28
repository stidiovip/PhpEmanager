<?php

/**
 * Created by PhpStorm.
 * User: Tidiane
 * Date: 28/08/2016
 * Time: 15:55
 */
class AppService implements IAppService
{

    private $contactDao;
    private $missionDao;
    private $trainsDao;
    private $employeeDao;

    /**
     * AppService constructor.
     */
    public function __construct( ContactDao $contactDao )
    {
        $this->contactDao = $contactDao;
    }

    public function addContact($contact)
    {
        if ( $this->contactDao->find($contact->getAddress(), $contact->getPhone()) == null ){
            $count = $this->contactDao->count();

            $contact->setId( $count + 1 );
            $this->contactDao->add($contact);
        }
    }

    public function findContactByAddressAndPhone($address, $phone)
    {
        return $this->contactDao->find( $address, $phone );
    }
}