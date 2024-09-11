<?php

require_once('Trait1.php');
require_once('Trait2.php');
require_once('Trait3.php');

class ExempleClass
{
    use Trait1, Trait2, Trait3{
        Trait1::showMessage insteadOf Trait2, Trait3;
        Trait2::showMessage as showMessageFromTrait2;
        Trait3::showMessage as showMessageFromTrait3;
    }

}

$objet1 = new ExempleClass();
$objet1->showMessage();
echo "<br>";
$objet1->showMessageFromTrait2();
echo "<br>";
$objet1->showMessageFromTrait3();