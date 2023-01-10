<?php

require_once 'Car.php';
require_once 'CharacteristicsDisplayable.php';

function Carfunctions (CharacteristicsDisplayable $characteristicsDisplayable): void
{
  echo '<ul>';
  foreach ($characteristicsDisplayable->getCharacteristics() as $name => $value) 
  {
    echo '<li>'.$name.' : '.$value.'</li>';
  }
  echo '</ul>';
}

function displayPrice(Car $car): void
{
  echo $car->getFinalPrice().' ('.$car->price.' )';
}