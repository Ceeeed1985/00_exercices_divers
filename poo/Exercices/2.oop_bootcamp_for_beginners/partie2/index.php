<?php

include_once('Caddy.php');
include_once('Fruits.php');
include_once('Wine.php');

$banane = new Fruits('Banane', 3, 2.5);
echo $banane->getFruit() . "<br>";
echo $banane->getPriceFruit() . "<br>";

$pomme = new Fruits('Pomme', 5, 1.4);
echo $pomme->getFruit() . "<br>";
echo $pomme->getPriceFruit() . "<br>";

$bordeaux = new Wine('Bordeaux', 2, 12.99);
echo $bordeaux->getWine() . "<br>";
echo $bordeaux->getPriceWine() . "<br>";