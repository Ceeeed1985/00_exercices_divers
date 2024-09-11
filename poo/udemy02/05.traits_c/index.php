<?php

require_once('Product.php');
require_once('OrderTracking.php');
require_once('Order.php');

$product1 = new Product ("Ordinateur portable", 999);
echo $product1->getProductName();
echo $product1->getProductPrice();
$product1->setOrder("electro24.02", "10/09/2024", "En cours de traitement");
$product1->reviewOrder();

$television = new Product("Télévision", 565);
echo $television->getProductName();
echo $television->getProductPrice();
$television->setOrder("electro24.01", "11/09/2024", "En cours de traitement");
$television->reviewOrder();

$gsm = new Order("#12547896350", "125 rue de la Livraison");
$gsm->setOrder("454687", "12/06/2024", "Expédié");
$gsm->showOrder();
$gsm->reviewOrder();