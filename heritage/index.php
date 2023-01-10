<?php

require_once 'ElectricCar.php';
require_once 'GasolineCar.php';
require_once 'Carfunctions.php';
require_once 'Tire.php';
require_once 'CharacteristicsDisplayable.php';

$tesla = new ElectricCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 100);
$tire = new Tire(55, 90, 32);

Carfunctions($tire);
Carfunctions($tesla);
Carfunctions($renault);
displayPrice($tesla);
displayPrice($renault);




