<?php


class library
{
    const MAX_BOOKS = 1;
    private $name;
    private $address;
    private $max;
    private $TabBooks = array();

    public function __construct($valName, $valAddress, $valMax)
    {
        $this->name = $valName;
        $this->address = $valAddress;
        $this->max = $valMax;
    }
    function getName(){return $this->name;}
    public function setName($val) { $this->name = $val;}
    function getAddress(){return $this->address;}
    public function setAddress($val) { $this->Address = $val;}
    function getMax(){return $this->max;}
    public function setMax($val) { $this->max = $val;}
}