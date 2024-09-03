<?php

class Beverage
{
    public $color;
    public $price;
    public $temperature;

    public function __construct(string $color, float $price, string $temperature)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }


}