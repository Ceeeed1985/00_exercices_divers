<?php

trait OrderTracking
{
    private $orderIndex;
    private $orderDate;
    private $orderStatus;

    public function setOrder($orderIndex, $orderDate, $orderStatus)
    {
        $this->orderIndex = $orderIndex;
        $this->orderDate = $orderDate;
        $this->orderStatus = $orderStatus;
    }

    public function reviewOrder()
    {
        echo "<br>Numéro de la commande : {$this->orderIndex}";
        echo "<br>Date de la commande : {$this->orderDate}";
        echo "<br>Statut de la commande : {$this->orderStatus}";
    }
}