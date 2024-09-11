<?php

require_once('Journaling.php');

class User {
    
    use Registration, ConnexionStatus;

    public function newRegister() {
        $this->register("Utilisateur enregistré");
    }
}

$user1 = new User();
echo $user1->newRegister();
echo "<br>";
echo $user1->register("coucou");
echo "<br>";
echo $user1->getConnexionStatus();