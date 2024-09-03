<?php

class Beverage
{
    private $color;
    private $price;
    private $temperature;
    public const BAR_NAME = 'Le Goliath';


    public function __construct(string $color, float $price, string $temperature)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getColor(): string
    {
        return $this->color;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function getTemperature(): string
    {
        return $this->temperature;
    }
    public function getBarName(): string
    {
        return self::BAR_NAME;
    }


}