<?php

Interface Personnel
{
    //On ne peut pas utiliser d'attribut/propriétés, mais on peut utiliser des constantes
    const MIN_SENIORITY = 5;
    const MAX_SENIORITY = 20;

    public function getName();
    public function getSeniority();
    public function getSalaryIndex();

    public function calculateSalary();
}