<?php

require('Utilisateurs.php');



$membre2 =  new Utilisateur();
// $membre2->initialiser("Chan", "Jackie", 60, "leroidukungfu@hotmail.com");
// echo $membre2->recupererInfosUser();

$membre2->setNom("Lee");
$membre2->setPrenom("Bruce");
$membre2->setAge(125);
$membre2->setEmail("lepetitdragon@google.com");

var_dump($membre2);

echo "Mon nom est " . $membre2->getNom() . "<br>";
echo "Mon prénom est " . $membre2->getPrenom() . "<br>";
echo "J'ai " . $membre2->getAge() . " ans.<br>";
echo "Voici mon email : " . $membre2->getEmail() . "<br>";




?>