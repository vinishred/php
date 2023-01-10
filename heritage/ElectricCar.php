<?php

require_once 'Car.php';

class ElectricCar extends Car
{
    public float $batteryAutonomy;

    public function __construct(float $price, string $brand, float $batteryAutonomy)
    {
        parent::__construct($price, $brand);
        $this->batteryAutonomy = $batteryAutonomy;
    }
    function getCharacteristics(): array
    {
        $characteristics = parent::getCharacteristics();
        $characteristics['batteryAutonomy'] = $this->batteryAutonomy;
        return $characteristics;
    }
    public function getFinalPrice(): float
    {
        return $this->price -2500;
    }
}
