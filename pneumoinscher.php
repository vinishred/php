<?php
$type = '';

switch ($type){
  case 'voiture':
  case 'quads':
    $numberWheel = 4;
    break;
  case 'scooter':
  case 'moto':
    $numberWheel = 2;
    break;
  case 'trikes':
    $numberWheel = 3;
    break;
  default:
    $numberWheel = 1;
}



switch ($numberWheel) {
  case 1:
  case 2:
  case 3:
    $pricePneufs = 60* $numberWheel;
    break;
  case 4:
    $pricePneufs = 0.85 * 60 * $numberWheel;
    break;
  default:
    echo 'veuillez saisir un nombre entre 1 et 4';
}
switch ($numberWheel) {
  case 1:
  case 2:
    $priceRouesCool = 75* $numberWheel;
    break;
  case 3:
  case 4:
    $priceRouesCool = 0.25 * 75* $numberWheel;
    break;
  default:
    echo 'veuillez saisir un nombre entre 1 et 4';
}

if ($pricePneufs < $priceRouesCool) {
  echo 'Pour cette commande c\'est Pneufs qui sera le moins cher';
} else {
  echo 'Pour cette commande c\'est RouesCool qui sera le moins cher';
}