<?php

/**
 * Created by PhpStorm.
 * User: Tidiane
 * Date: 27/08/2016
 * Time: 16:25
 */

class ContactDao
{
    /**
     * ContactDao constructor.
     */
    public function __construct()
    {
    }

    /**
     * Gets a contact by it's id
     * @param $id
     * @return Contact
     */
    public function get ( $id ){
        return Db::$contacts[ $id ];
    }

    /**
     * @param $address
     * @param $phone
     * @return null
     */
    public function find ( $address, $phone ){

        if ( count (Db::$contacts) > 0 ){
            foreach ( Db::$contacts as $contact ){
                if ( strcmp($contact->getAddress(), $address) == 0 &&  strcmp($contact->getPhone(), $phone) == 0 ){
                    return $contact;
                }
            }
        }

        return null;
    }

    /**
     * Adds a new contact to the contact
     * @param Contact $contact
     */
    public function add ( $contact ){
        Db::$contacts[$contact->getId()] = $contact;
    }

    /**
     * Updates a contact
     * @param Contact $contact
     * @throws Exception
     */
    public function update ( $contact ){

        if ( !array_key_exists( $contact->getId())){
            throw new Exception (" Contact not found ");
        }

        Db::$contacts[ $contact->getId() ] = $contact;
    }

    /**
     * Deletes a contact
     * @param $contact
     */
    public function delete ( $contact ){

    }

    public function count(){
        return count(Db::$contacts);
    }
}