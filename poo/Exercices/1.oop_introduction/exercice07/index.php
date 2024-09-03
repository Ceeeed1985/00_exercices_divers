<?php

include_once('Beverage.php');
include_once('Beer.php');

$duvel = new Beer('Duvel', 8.5, "Blonde", 3.5, "Cold");

echo $duvel->getAlcoholPercentage() . "<br>"; //affiche en appelant la fonction
echo $duvel->getColor() . "<br>";
echo $duvel->getInfo() . "<br>";
echo $duvel->getBarName() . "<br>";

// echo $beverage->getBarName();
// echo $beer->getBarName();

$beverage = new Beverage('noir', 2, 'cold');
echo $beverage->getBarNameBeverage() . "<br>";

echo $duvel->getAdress() . "<br>";

echo Beer::getAdress();