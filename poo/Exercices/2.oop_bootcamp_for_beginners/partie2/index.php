<?php

include_once('Caddy.php');
include_once('Fruits.php');
include_once('Wine.php');

$caddy1 = new Caddy();

$banane = new Fruits('Banane', 3, 2.5);
$pomme = new Fruits('Pomme', 5, 1.4);
$bordeaux = new Wine('Bordeaux', 2, 12.99);

$caddy1->addItem($banane);
$caddy1->addItem($pomme);
$caddy1->addItem($bordeaux);

// Affichage des détails des articles
echo $banane->getPriceFruit() . "<br>";
echo $pomme->getPriceFruit() . "<br>";
echo $bordeaux->getPriceWine() . "<br>";

// Calcul et affichage du coût total du caddy
echo "<br>" . $caddy1->getTotalCostHTVA() . " Euros HTVA | " . $caddy1->getTotalQuantity() . " produits <br>";
echo "<b>Prix Total : " . $caddy1->getTotalCostTVAC() . " EurosTVAC<b>";
