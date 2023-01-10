<?php

require_once 'CharacteristicsDisplayable.php';

abstract class Car implements CharacteristicsDisplayable
{
    public float $price;
    public string $brand;

    public function __construct(float $price, string $brand)
    {
        $this->price = $price;
        $this->brand = $brand;
    }
    function getCharacteristics(): array
    {
       return [
        'price'=>$this->price,
        'brand'=>$this->brand
       ];
    }
    public abstract function getFinalPrice(): float;
}
