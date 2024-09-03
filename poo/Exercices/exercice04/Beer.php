<?php

class Beer extends Beverage
{
    protected $name;
    protected $alcoholPercentage;

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
        return "La bière que vous avez choisi, " . $this->name . " est une bière " . $this->color . " dont le taux d'alcool est de " . $this->alcoholPercentage . "%.<br>
        Son prix est de " . $this->price . " euros.<br>";
    }

    protected function beerInfo(): string
    {
        return "Nom de la bière : " . $this->name . ".<br>
        Pourcentage d'alcool : " . $this->alcoholPercentage . ".<br>
        Couleur : " . $this->color . ".<br>";
    }

    public function getBeerInfo():string
    {
        return $this->beerInfo();
    }

}