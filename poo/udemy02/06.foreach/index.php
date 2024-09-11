<?php


require_once('Users.php');

$Magali = new Users ("Magali", "mdv@gmail.com", 37, "Dauphin");
$Magali->showUser();

$Magali->setNationality("Belgian");
var_dump($Magali);
$Magali->showUser();