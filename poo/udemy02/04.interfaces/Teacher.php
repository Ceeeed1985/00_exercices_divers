<?php

class Teacher implements Personnel, Official
{
    private $name;
    private $seniority;
    private $salaryIndex;

    public function __construct ($name, $seniority, $salaryIndex)
    {
        $this->setName($name);
        $this->setSeniority($seniority);
        $this->setSalaryIndex($salaryIndex);
    }

    //Méthode présente dans l'interface Personnel
    public function calculateSalary()
    {
        return 1000 * (1 + $this->getSalaryIndex()*$this->getSeniority()/100);
    }

    //Méthode présente dans l'interface Official
    public function takeExam()
    {
        echo "Je suis fonctionnaire et j'ai le droit de passer l'examen";
    }

    //SETTERS
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setSeniority($seniority)
    {
        $this->seniority = $seniority;
    }
    public function setSalaryIndex($salaryIndex)
    {
        $this->salaryIndex = $salaryIndex;
    }

    //GETTERS

    public function getName()
    {
        return $this->name;
    }
    public function getSeniority()
    {
        return $this->seniority;
    }
    public function getSalaryIndex()
    {
        return $this->salaryIndex;
    }


}