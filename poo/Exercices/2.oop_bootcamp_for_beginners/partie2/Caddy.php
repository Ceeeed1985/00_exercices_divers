<?php

class Caddy {

    private array $items = [];

    public function addItem(Caddy $item):void
    {
        $this->items[] = $item;
    }


    //Récupérer le prix HTVA
    public function getTotalCostHTVA():float
    {
        $totalCostHTVA = 0;
        foreach ($this->items as $item) {
            $totalCostHTVA += $item->getUnitPrice()*$item->getQuantity();
        }
        return $totalCostHTVA;
    }

    //Récupérer le prix TVAC
    public function getTotalCostTVAC():float
    {
        $totalCostTVAC = 0;
        foreach ($this->items as $item) {
            $totalCostTVAC += ($item->getUnitPrice()*$item->getQuantity()) * (1 + $item->getTVA());
        }
        return $totalCostTVAC;
    }

    //Récupérer la quantité d'articles mis dans le panier
    public function getTotalQuantity():int
    {
        $totalQuantity = 0;
        foreach ($this->items as $item) {
            $totalQuantity += $item->getQuantity();
        }
        return $totalQuantity;
    }

    
}