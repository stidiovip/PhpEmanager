<?php

/**
 * Created by PhpStorm.
 * User: Tidiane
 * Date: 28/08/2016
 * Time: 22:39
 */
class Training
{
    private $id;
    private $theme;
    private $duration;
    private $employees;

    /**
     * Training constructor.
     * @param $theme
     * @param $duration
     */
    public function __construct($theme, $duration)
    {
        $this->theme = $theme;
        $this->duration = $duration;
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
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param mixed $theme
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function addEmployee( Employee $employee ){
        if ( $this->employees == null ){
            $this->employees = array();
        }

    }
}