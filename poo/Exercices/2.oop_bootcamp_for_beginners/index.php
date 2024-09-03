<?php

$countBananas = 6;
$priceBanana = 1;
$countApples = 3;
$priceApple = 1.5;
$countBottlesOfWine = 2;
$priceBottleOfWine = 10;
$tvaFruits = 0.06;
$tvaWine = 0.21;
$totalPriceBananas;
$totalPriceAppels;
$totalPriceFruits;


$totalPriceBananas = $countBananas * $priceBanana;
$totalPriceAppels = $countApples * $priceApple;
$totalPriceFruits = $totalPriceBananas + $totalPriceAppels;
$taxeFruits = $totalPriceFruits * $tvaFruits;

$totalPriceBottlesOfWine = $countBottlesOfWine * $priceBottleOfWine;
$taxeWine = $totalPriceBottlesOfWine * $tvaWine;

$totalPrice = $totalPriceFruits + $totalPriceBottlesOfWine;
$totalTaxe = $taxeFruits + $taxeWine;

Echo "le prix total des fruits est de " . $totalPriceFruits . " euros dont " . $taxeFruits . " euros de taxe.<br>";
Echo "le prix total des bouteilles de vin est de " . $totalPriceBottlesOfWine . " euros dont " . $taxeWine . " euros de taxe.<br>";
Echo "<br>TOTAL<br><br>";
Echo "le prix total du ticket est de " . $totalPrice . " euros dont " . $totalTaxe . " euros de taxe.<br>";

