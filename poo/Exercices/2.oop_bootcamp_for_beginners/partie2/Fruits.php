<?php

class Fruits extends Caddy
{
    private string $fruit;
    private float $fruitsTVA;
    private int $quantity;
    private float $unitPrice;

    public function __construct (string $fruit, int $quantity, float $unitPrice, float $fruitsTVA = 0.06)
    {
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
        $this->fruit = $fruit;
        $this->fruitsTVA = $fruitsTVA;
    }

    public function setFruit(): void
    {
        $this->fruit = $fruit;
    }

    public function getFruit():string
    {
        return $this->fruit;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    public function getPriceFruit():string
    {
        $totalPriceHTVA = $this->unitPrice*$this->quantity;
        $totalPriceTVAC = $totalPriceHTVA + ($totalPriceHTVA * $this->fruitsTVA);
        $totalTVA = $totalPriceTVAC - $totalPriceHTVA;
        return $this->fruit . " : "
        . $totalPriceHTVA . " Euros HTVA | "
        . $this->quantity . " unité(s) | "
        . "TVA : " . $this->fruitsTVA*100 . "% | "
        . $totalPriceTVAC . " Euros TVAC.";
    }


}