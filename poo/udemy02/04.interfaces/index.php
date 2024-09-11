<?php

//On met d'abords les interfaces mères
require_once('Personnel.php');
require_once('Official.php');
//On ajoute la classe après les interfaces
require_once('Teacher.php');

$teacher1 = new Teacher("de Vos", 12, 25);
echo $teacher1->getName();
echo "<br>";
echo $teacher1->calculateSalary();

//On utilise une seconde interface
echo "<br>";
$teacher1->takeExam();