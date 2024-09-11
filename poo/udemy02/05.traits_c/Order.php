<?php

require_once ('OrderTracking.php');

class Order
{
    use OrderTracking;

    private $clientID;
    private $clientAdress;

    public function __construct($clientID, $clientAdress)
    {
        $this->clientID = $clientID;
        $this->clientAdress = $clientAdress;
    }

    public function showOrder()
    {
        echo "<br><br>ID client : {$this->clientID}";
        echo "<br><br>Adresse client : {$this->clientAdress}";
    }
}


$gsm = new Order("#12547896350", "125 rue de la Livraison");
$gsm->setOrder("454687", "12/06/2024", "Expédié");
$gsm->showOrder();
$gsm->reviewOrder();