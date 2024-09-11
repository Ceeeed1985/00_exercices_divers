<?php

require_once('Employee.php');
require_once('SecurityOfficer.php');

$securityOfficer1 = new SecurityOfficer('Truyen', 'Cédric', 2250);
$securityOfficer1->getAnnualSalary();
echo "<br>";
$securityOfficer1->getHollidayInfo();




//Les lignes de codes suivantes ne fonctionnent pas avec une classe abstraite
// $employee1 = new Employee();

// $employee1->setFirstname("Cédric");
// $employee1->setLastname("Truyen");
// $employee1->setSalary(2400);

// echo $employee1->getFirstname(). "<br>";
// echo $employee1->getLastname(). "<br>";
// echo $employee1->getSalary(). "<br>";

?>