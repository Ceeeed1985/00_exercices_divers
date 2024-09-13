<?php

namespace App\etudiants;


class Personne
{
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name     = $name;
        $this->email    = $email;
    }

    public function getInfoEtudiants()
    {
        echo    "Nom de l'étudiant : " . $this->name;
        echo    "<br>";
        echo    "Email de l'étudiant : " . $this->email;
    }
}