<?php

class Customer
{
    private $firstName;
    private $lastName;
    private $id;


    public function __construct($id, $firstName, $lastName) 
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    
      public function getId() 
    {
        return $this->id;
    }
    
    public function getFirstName() 
    {
        return $this->firstName;
    }
    
    public function getLastName() 
    {
        return $this->lastName;
    }
}
