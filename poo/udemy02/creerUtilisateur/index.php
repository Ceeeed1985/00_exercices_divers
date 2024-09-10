<?php

require('Utilisateurs.php');
require_once('Produits.php');


$membre1 =  new Utilisateur("Jean", "Durant", "abc@google.com");
// var_dump($membre1);
// $membre2 =  new Utilisateur();
// $membre3 =  new Utilisateur();
// $membre4 =  new Utilisateur();

echo $membre1->getNom() . "<br>";
echo $membre1->getPrenom() . "<br>";
echo $membre1->getEmail() . "<br>";

$produit1 = new Produit ("Electro", "Télévision", 600);
// echo $produit1->getName();
var_dump($produit1);
// echo "<br>";
// echo Produit::$remise;
// echo "<br>";
// echo $produit1::$remise;

echo $produit1::getRemise();


?>