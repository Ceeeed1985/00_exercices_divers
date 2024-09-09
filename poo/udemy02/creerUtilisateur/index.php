<?php

require('Utilisateurs.php');



$membre2 =  new Utilisateur();
$membre2->initialiser("Chan", "Jackie", 60, "leroidukungfu@hotmail.com");
echo $membre2->recupererInfosUser();

?>