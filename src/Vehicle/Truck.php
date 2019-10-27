<?php

namespace App\Vehicle;

class Truck extends Vehicle
{
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    /**
     * @var int
     */
    private $storageCapacity;
    /**
     * @var int
     */
    private $load = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
    }

    /**
     * @param int $energyLevel
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    /**
     * @return int
     */
    public function getLoad(): int
    {
        return $this->load;
    }

    /**
     * @return int
     */
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    /**
     * @param int $load
     */
    public function setLoad(int $load): void
    {
        if ($load < $this->storageCapacity) {
            $this->load = $load;
        }
    }

    /**
     * @param int $storageCapacity
     */
    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function isFull():string
    {
        return ($this->load == $this->storageCapacity) ? 'full' : 'in filling';
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}