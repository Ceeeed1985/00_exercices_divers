<?php


require_once('Users.php');

$user1 = new Users ("Magali", "mdv@gmail.com", 37, "Dauphin");

echo '<br><br>';


echo "<b>Exemple sur la magic method __call() </b><br>";
$user1->listerMoi('PHP', 'Programmation');

echo '<br><br>';

echo "<b>Exemple sur la magic method __get() </b><br>";
echo $user1->name;
echo '<br>';
echo $user1->adresse;

echo '<br><br>';

echo "<b>Exemple sur la magic method __set() </b><br>";
$user1->age = 38;
echo '<br>';
$user1->coucou = 'hello';

echo '<br><br>';

echo "<b>Exemple sur la magic method __isset() </b><br>";
if (isset($user1->age))
{
    echo "Existe";
} else {
    echo "<br>N'existe pas";
}

echo '<br><br>';

echo "<b>Exemple sur la magic method __unset() </b><br>";
unset($user1->age);