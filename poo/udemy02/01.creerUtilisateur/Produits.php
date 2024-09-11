<?php

class Produit
{
    private $reference;
    private $name;
    private $price;

    private static $remise = 20;
    

    //Constructeur
    public function __construct($reference, $name, $price)
    {
        $this->setReference($reference);
        $this->setName($name);
        $this->setPrice($price);
    }

    //Setters
    private function setReference($reference)
    {
        $this->reference = $reference;
    }
    private function setName($name)
    {
        $this->name = $name;
    }
    private function setPrice($price)
    {
        $this->price = $price;
    }

    public function setRemise($remise)
    {
        self::$remise = $remise;
    }

    //Getters

    private function getReference()
    {
        return $this->reference;
    }
    private function getName()
    {
        return $this->name;
    }
    private function getPrice()
    {
        return $this->price;
    }

    public static function getRemise()
    {
        return self::$remise;
    }

    public function getNewPrice()
    {
        return $this->price * (1 - self::$remise/100);
    }
}

?>