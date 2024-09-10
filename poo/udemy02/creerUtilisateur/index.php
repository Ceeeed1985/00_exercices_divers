<?php

require('Utilisateurs.php');
require_once('Produits.php');

$membre1 = new Utilisateur ("Jean", "Dupont", "jd@123.com");
$membre1->setNote(8);
echo $membre1->getNote();
echo "<br>";
echo $membre1->degreImplication();




//EXERCICES SUR LES GETTERS ET SETTERS + CONSTRUCTEURS + STATIC
// $produit1 = new Produit ("Electro", "Télévision", 200);

// // echo Produit::getRemise();
// // echo "<br>";
// // echo $produit1->getNewPrice();

// echo "<br>";
// $produit1->setRemise(50);
// echo Produit::getRemise();
// echo "<br>";
// echo $produit1->getNewPrice();
// echo "<br><br>";

// echo $produit1::getRemise();

// echo "<br><br>";

// $produit2 = new Produit ("Electro", "Laptop", 999);
// var_dump($produit2);
// echo "<br>" . $produit2::getRemise();
// echo "<br>" . $produit2->getNewPrice();



?>