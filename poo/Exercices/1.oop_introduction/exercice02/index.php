<?php

include_once('Beverage.php');
include_once('Beer.php');

$duvel = new Beer('Duvel', 8.5, "Blonde", 3.5, "Cold");

echo $duvel->getAlcoholPercentage() . "<br>"; //affiche en appelant la fonction
echo $duvel->alcoholPercentage . "<br>"; //affiche en appelant la variable
echo $duvel->color . "<br>";
echo $duvel->getInfo();

$coca = new Beverage("noir", 1.5, "Cold");

echo $coca->getInfo();