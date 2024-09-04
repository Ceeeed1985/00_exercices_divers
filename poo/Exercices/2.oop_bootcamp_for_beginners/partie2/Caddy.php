<?php

class Caddy {

    private array $items = [];

    public function addItem(Caddy $item):void
    {
        $this->items[] = $item;
    }

    public function getTotalCost():float
    {
        $totalCost = 0;
        foreach ($this->items as $item) {
            $totalCost += $item->getUnitPrice()*$item->getQuantity();
        }
        return $totalCost;
    }

    
}