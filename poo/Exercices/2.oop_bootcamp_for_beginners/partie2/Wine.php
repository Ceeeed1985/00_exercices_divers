<?php

class Wine extends Caddy
{
    private string $wineName;
    private float $wineTVA;

    public function __construct (string $wineName, int $quantity, float $unitPrice, float $fruitsTVA = 0.21)
    {
        parent::__construct($quantity, $unitPrice);
        $this->wineName = $wineName;
        // $this->fruitTVA = $fruitTVA;
    }

    public function setWine(): string
    {
        $this->wineName = $wineName;
    }

    public function getWine():string
    {
        return $this->wineName;
    }

    public function getPriceWine():string
    {
        return $this->wineName . " : " . $this->unitPrice*$this->quantity;
    }


}