<?php

class Fruits extends Caddy
{
    private string $fruit;
    private float $fruitsTVA;

    public function __construct (string $fruit, int $quantity, float $unitPrice, float $fruitsTVA = 0.06)
    {
        parent::__construct($quantity, $unitPrice);
        $this->fruit = $fruit;
        // $this->fruitTVA = $fruitTVA;
    }

    public function setFruit(): string
    {
        $this->fruit = $fruit;
    }

    public function getFruit():string
    {
        return $this->fruit;
    }

    public function getPriceFruit():string
    {
        return $this->fruit . " : " . $this->unitPrice*$this->quantity;
    }


}