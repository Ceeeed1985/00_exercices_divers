<?php

use App\EspressoMachine;
use App\IrishCoffeeMachine;
use App\MultiCoffeeMachine;


require '../vendor/autoload.php';

$irishCoffee = new IrishCoffeeMachine();
$espresso = new EspressoMachine();
$multiCoffeeMachine = new MultiCoffeeMachine();

var_dump(
    $espresso->makeEspressoCoffee(),
    $irishCoffee->makeIrishCoffee(),
    $multiCoffeeMachine->makeCoffee(),
);