<?php

class Beer extends Beverage
{
    private $name;
    private $alcoholPercentage;

    public function __construct(string $name, float $alcoholPercentage, string $color, float $price, string $temperature) {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage() : float
    {
        return $this->alcoholPercentage;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getInfo() : string
    {
        return "La bière que vous avez choisi, " . $this->getName() . " est une bière " . $this->getColor() . " dont le taux d'alcool est de " . $this->getAlcoholPercentage() . "%.<br>
        Son prix est de " . $this->getPrice() . " euros.<br>";
    }

    private function beerInfo(): string
    {
        return "Nom de la bière : " . $this->getName() . ".<br>
        Pourcentage d'alcool : " . $this->getAlcoholPercentage() . ".<br>
        Couleur : " . $this->getColor() . ".<br>";
    }

    public function getBeerInfo():string
    {
        return $this->beerInfo();
    }

}