<?php

require_once ('OrderTracking.php');

class Product
{
    use OrderTracking;

    private $productName;
    private $productPrice;

    public function __construct($productName, $productPrice)
    {
        $this->setProductName($productName);
        $this->setProductPrice($productPrice);
    }

    //Setters
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;
    }

    //Getters
    public function getProductName()
    {
        return "<br><br>Nom du produit : ". $this->productName;
    }
    public function getProductPrice()
    {
        return "<br>Prix du produit : " . $this->productPrice;
    }

}



//Propriétés et méthodes propres au produit

//Nom du produit, Prix du produit, 
//constructeur
//méthode qui affiche le nom du produit et son prix