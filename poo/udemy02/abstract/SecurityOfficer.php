<?php

class SecurityOfficer extends Employee
{
    public function __construct ($lastname, $firstname, $salary)
    {
        $this->setLastname($lastname);
        $this->setFirstname($firstname);
        $this->setSalary($salary);
    }

    public function getAnnualSalary()
    {
        echo "Employé : " . $this->getLastname() . " " . $this->getFirstname() . "<br>";
        echo "Mon salaire annuel est de ". $this->getSalary() * 12 . " euros!";
    }

    public function getHollidayInfo()
    {
        echo "J'ai 33 jours de congés";
    }


}