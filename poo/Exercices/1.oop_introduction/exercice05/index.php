<?php

include_once('Beverage.php');
include_once('Beer.php');

$duvel = new Beer('Duvel', 8.5, "Blonde", 3.5, "Cold");

echo $duvel->getAlcoholPercentage() . "<br>";

echo $duvel->getInfo();

echo $duvel->getBeerInfo();

echo "Nom de la bière : " . $duvel->getName() . "<br>";

echo "Le prix de la bière est de " . $duvel->price . " euros.<br>";
