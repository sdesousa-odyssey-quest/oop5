<?php

namespace App\Vehicle;

class Bicycle extends Vehicle implements \LightableInterface
{
    public function switchOn(): bool
    {
        return ($this->getCurrentSpeed() > 10);
    }

    public function switchOff(): bool
    {
        return false;
    }


}