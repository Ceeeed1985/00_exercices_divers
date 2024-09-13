<?php

namespace App\clients;

class Personne
{
    private $montant;
    private $situation;

    public function __construct ($montant, $situation)
    {
        $this->montant =    $montant;
        $this->situation =  $situation;
    }

    public function getInfoClient()
    {
        echo "Montant payé : " . $this->montant;
        echo "<br>";
        echo "Situation financière : " . $this->situation;
    }


}
