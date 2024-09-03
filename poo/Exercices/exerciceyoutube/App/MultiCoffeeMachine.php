<?php

namespace App;

use App\Traits\IrishCoffeeTrait;
use App\Traits\EspressoCoffeeTrait;

class MultiCoffeeMachine extends CoffeeMaker
{
    use IrishCoffeeTrait;
    use EspressoCoffeeTrait;

}