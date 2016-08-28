<?php

/**
 * Created by PhpStorm.
 * User: Tidiane
 * Date: 28/08/2016
 * Time: 22:39
 */
class Employee
{
    private $id;
    private $firstname;
    private $lastname;
    private $salary;

    private $contact;
    private $missions;
    private $trainings;


    /**
     * Employee constructor.
     * @param $firstname
     * @param $lastname
     * @param $salary
     */
    public function __construct($firstname, $lastname, $salary)
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->salary = $salary;

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param mixed $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }

    public function addMissions ( Mission $mission ){
        if ( $this->missions == null ){
            $this->missions = array($mission);
        }else{
            $this->missions[$mission->getId()] = array($mission);
        }

        $mission->setEmployee( $this );
    }
}