<?php

include_once('Students.php');
include_once('Groups.php');

$student1 = new Students("Jamie Lannister", 25);
$student2 = new Students("Aria Stark", 21);
$student3 = new Students("Le Limier", 32);
$student4 = new Students("Rob Stark", 16);
$student5 = new Students("Tyrion Lannister", 29);
$student6 = new Students("Sansa Stark", 22);
$student7 = new Students("Jaime Lannister", 25);
$student8 = new Students("Cersei Lannister", 35);
$student9 = new Students("Jon Snow", 28);
$student10 = new Students("Daenerys Targaryen", 26);
$student11 = new Students("Brienne de Tarth", 30);
$student12 = new Students("Petyr Baelish", 40);
$student13 = new Students("Samwell Tarly", 27);
$student14 = new Students("Melisandre", 45);
$student15 = new Students("Jorah Mormont", 34);
$student16 = new Students("Sandor Clegane", 36);
$student17 = new Students("Theon Greyjoy", 24);
$student18 = new Students("Olenna Tyrell", 70);
$student19 = new Students("Varys", 50);
$student20 = new Students("Missandei", 29);

$group1 = new Groups('Bleus');
$group2 = new Groups('Rouges');

$group1->addStudent($student1);
$group2->addStudent($student2);
$group1->addStudent($student3);
$group2->addStudent($student4);
$group1->addStudent($student5);
$group2->addStudent($student6);
$group1->addStudent($student7);
$group2->addStudent($student8);
$group1->addStudent($student9);
$group2->addStudent($student10);
$group1->addStudent($student11);
$group2->addStudent($student12);
$group1->addStudent($student13);
$group2->addStudent($student14);
$group1->addStudent($student15);
$group2->addStudent($student16);
$group1->addStudent($student17);
$group2->addStudent($student18);
$group1->addStudent($student19);
$group2->addStudent($student20);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de scores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
        <h1>Programmation Orientée Objet</h1>
        <h2>2. oop Bootcamp for Beginners<h2>
    </header>

    <table>
        <thead>
            <tr>
                <th><?= $group1->getGroupName()?></th>
                <th><?= $group2->getGroupName()?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php $studentsListGroup1 = $group1->getStudentsList();
                    foreach ($studentsListGroup1 as $student) {
                        echo "<br><b>" . $student['name'] . " :</b> " . $student['score'] . "<br>";
                    }
                    ?>
                </td>
                <td>
                    <?php $studentsListGroup2 = $group2->getStudentsList();
                    foreach ($studentsListGroup2 as $student) {
                        echo "<br><b>" . $student['name'] . " :</b> " . $student['score'] . "<br>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td><b>Score total : <?= $group1->countTotalScore() . "<br>";?></b></td>
                <td><b>Score total : <?= $group2->countTotalScore() . "<br>";?></b></td>
            </tr>
            <tr>
                <td>Moyenne par personnage : <?= $group1->getAverageGroup() . "<br>";?></td>
                <td>Moyenne par personnage : <?= $group2->getAverageGroup() . "<br>";?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>

