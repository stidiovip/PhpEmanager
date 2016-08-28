<?php

/**
 * Created by PhpStorm.
 * User: Tidiane
 * Date: 28/08/2016
 * Time: 21:42
 */
interface IAppService
{
    /**
     * @param $contact
     * @return mixed
     */
    public function addContact ( $contact );

    /**
     * @param $address
     * @param $phone
     * @return mixed
     */
    public function findContactByAddressAndPhone ( $address, $phone );
}