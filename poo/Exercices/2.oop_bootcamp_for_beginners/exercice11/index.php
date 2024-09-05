<?php

include_once('Students.php');
include_once('Groups.php');

$student1 = new Students("Jamie Lannister", 25);
$student2 = new Students("Aria Stark", 21);
$student3 = new Students("Le Limier", 32);
$student4 = new Students("Rob Stark", 16);
$student5 = new Students("La Montagne", 34);
$student6 = new Students("Le Roi du Nord", 29);


$group1 = new Groups('Bleus');
$group2 = new Groups('Rouges');

$group1->addStudent($student1);
$group2->addStudent($student2);
$group1->addStudent($student3);
$group2->addStudent($student4);
$group1->addStudent($student5);
$group2->addStudent($student6);

echo $group1->getGroupName() . "<br>";
$studentsListGroup1 = $group1->getStudentsList();
foreach ($studentsListGroup1 as $student) {
    echo "<br><b>" . $student['name'] . " :</b> " . $student['score'] . "<br>";
}

echo $group2->getGroupName() . "<br>";
$studentsListGroup2 = $group2->getStudentsList();
foreach ($studentsListGroup2 as $student) {
    echo "<br><b>" . $student['name'] . " :</b> " . $student['score'] . "<br>";
}
