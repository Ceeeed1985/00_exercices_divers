<?php

class Caddy {
    protected int $quantity;
    protected float $unitPrice;


    public function __construct(int $quantity, float $unitPrice){
        $this->quantity = $quantity;
        $this->unitPrice = $unitPrice;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    
}