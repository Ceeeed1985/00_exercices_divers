<?php

require 'Utilisateurs.php';
require 'Auteurs.php';

$auteur1 = new Auteurs("Goldman", "Jean-Jacques", "jemarcheseul@cd.com", 25, "Trop cool");
echo $auteur1->afficherNom();

var_dump($auteur1);


echo $auteur1->getPrenom();

echo $auteur1->seConnecter();
$auteur1->afficherNom();
echo "<br>";
echo $auteur1->getNote();

$utilisateur1 = new Utilisateurs("Bruel", "Patrick", "casserlavoix@reccord.com");
var_dump($utilisateur1);
echo "<br>";
echo $utilisateur1->seConnecter();