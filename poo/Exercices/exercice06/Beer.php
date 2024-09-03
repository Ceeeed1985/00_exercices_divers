<?php

class Beer extends Beverage
{
    private $name;
    private $alcoholPercentage;
    public const BAR_NAME = 'Le Goliath';

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

    public function getBarName(): string
    {
        return self::BAR_NAME;
    }

    public function getInfo() : string
    {
        return "La bière que vous avez choisi, " . $this->getName() . " est une bière " . $this->getColor() . " dont le taux d'alcool est de " . $this->getAlcoholPercentage() . "%.<br>
        Son prix est de " . $this->getPrice() . " euros.";
    }

}