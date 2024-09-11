<?php

abstract class Employee
{ 
    protected $lastname;
    protected $firstname;
    protected $salary;

    //Je ne peux pas créer de méthode, je peux juste déclarer leurs signatures
    //Cela signifie la méthode mais sans crochet

    abstract function getAnnualSalary();
    abstract function getHollidayInfo();


    //SETTERS
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    

    //GETTERS
    public function getLastname()
    {
        return $this->lastname;
    }
    public function getFirstname()
    {
        return $this->firstname;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}

