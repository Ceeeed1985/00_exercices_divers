<?php

class Wine extends Caddy
{
    private string $wineName;
    private float $wineTVA;
    private int $quantity;
    private float $unitPrice;

    public function __construct (string $wineName, int $quantity, float $unitPrice, float $wineTVA = 0.21)
    {
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
        $this->wineName = $wineName;
        $this->wineTVA = $wineTVA;
    }

    public function setWine(): string
    {
        $this->wineName = $wineName;
    }

    public function getWine():string
    {
        return $this->wineName;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    public function getPriceWine():string
    {
        $totalPriceHTVA = $this->unitPrice*$this->quantity;
        $totalPriceTVAC = $totalPriceHTVA + ($totalPriceHTVA * $this->wineTVA);
        $totalTVA = $totalPriceTVAC - $totalPriceHTVA;
        return $this->wineName . " : "
        . $totalPriceHTVA . " Euros HTVA | "
        . $this->quantity . " unité(s) | "
        . "TVA : " . $this->wineTVA*100 . "% | "
        . $totalPriceTVAC . " Euros TVAC.";
    }


}