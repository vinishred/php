<?php

require_once 'Car.php';
class GasolineCar extends Car
{
    public float $co2Emission;
    public function __construct(float $price, string $brand, float $co2Emission)
    {
        parent::__construct($price, $brand);
        $this->co2Emission = $co2Emission;
    }
    function getCharacteristics(): array
    {
        $characteristics = parent::getCharacteristics();
        $characteristics['co2Emission'] = $this->co2Emission;
        return $characteristics;
    }
    public function getFinalPrice(): float
    {
      $excessivEmission = $this->co2Emission > 119;
      if ($excessivEmission >=0 )
      {
        return $this->price + 50* $excessivEmission;
      } return $this->price;
      
    }
}