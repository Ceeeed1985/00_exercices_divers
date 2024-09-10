<?php

require('Utilisateurs.php');



$membre1 =  new Utilisateur("Jean", "Durant", "abc@google.com");
// var_dump($membre1);
// $membre2 =  new Utilisateur();
// $membre3 =  new Utilisateur();
// $membre4 =  new Utilisateur();

echo $membre1->getNom() . "<br>";
echo $membre1->getPrenom() . "<br>";
echo $membre1->getEmail() . "<br>";

?>