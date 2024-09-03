<?php

class Beer extends Beverage
{
    public $name;
    public $alcoholPercentage;

    public function __construct(string $name, float $alcoholPercentage, string $color, float $price, string $temperature) {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage() : float
    {
        return $this->alcoholPercentage;
    }

    public function getInfo() : string
    {
        return "La bière que vous avez choisi, " . $this->name . " est une bière " . $this->color . " dont le taux d'alcool est de " . $this->alcoholPercentage . "%.<br>
        Son prix est de " . $this->price . " euros.";
    }

}