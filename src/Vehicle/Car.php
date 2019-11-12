<?php

namespace App\Vehicle;

use Exception;

class Car extends Vehicle implements \LightableInterface
{
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var bool
     */
    private $hasParkBrake = true;

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @param bool $hasParkBrake
     */

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @return bool
     */
    public function isParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function setEnergy(string $energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
    }

    public function setParkBrake(): void
    {
        $this->hasParkBrake = !$this->hasParkBrake;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function start(): string
    {
        if($this->hasParkBrake) {
            throw new Exception("Frein à main actif");
        }
        return "Start !";
    }
}
