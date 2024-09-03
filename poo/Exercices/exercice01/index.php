<?php

class Beverage {
    public $color;
    public $price;
    public $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold") {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo()
    {
        return "This beverage is $this->temperature and $this->color.<br> The price is $this->price euros.<br><br>";
    }

}

$beverage = new Beverage("red", 2.5);
echo $beverage->getInfo();

$cola = new Beverage("black", 2.0);
echo $cola->getInfo();
echo "Temperature : " . $cola->temperature . " ! <br>";

$sprite = new Beverage("white", 1.5);
echo $sprite->getInfo();