<?php

namespace App\Traits;

trait EspressoCoffeeTrait
{
    public function makeEspressoCoffee(): string
    {
        return static::class . 'fait un Espresso.';
    }
}