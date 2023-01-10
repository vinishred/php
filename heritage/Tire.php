<?php

require_once 'CharacteristicsDisplayable.php';

class Tire implements CharacteristicsDisplayable
{
  public float $width;
  public float $height;
  public float $diameter;

  public function __construct(float $width, float $height, float $diameter)
  {
    $this->width = $width;
    $this->height = $height;
    $this->diameter = $diameter;
  }
  public function getCharacteristics(): array
  {
    return [
      'width'=>$this->width,
      'height'=>$this->height,
      'diameter'=>$this->diameter
    ];
  }
}
