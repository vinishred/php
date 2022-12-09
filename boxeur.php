<?php
$boxer1Weight = 76.4;
$boxer2Weight = 90.7;

if ($boxer1Weight >= 90.7 && $boxer2Weight >= 90.7) {
  echo 'FIGHT!! vous êtes dans la catégorie POIDS LOURDS';
}
elseif ($boxer1Weight < 76.2 && $boxer2Weight < 76.2) {
  echo 'Vous ne pouvez pas combattre ça manque de poids pour les deux boxeurs!!';
}
elseif ($boxer1Weight < 76.2) {
  echo 'Vous ne pouvez pas combattre le boxeur 1 manque de poids !!';
}
elseif ($boxer2Weight < 76.2) {
  echo 'Vous ne pouvez pas combattre le boxeur 2 manque de poids  !!';
}
elseif ($boxer1Weight >= 79.3 && $boxer2Weight >= 79.3 && $boxer1Weight <= 90.7 && $boxer2Weight >= 90.7 ) {
  echo 'FIGHT!! vous êtes dans la catégorie poids MI-LOURDS';
}
elseif ($boxer1Weight >= 76.2 && $boxer2Weight >= 76.2 && $boxer1Weight <= 79.3 && $boxer2Weight <= 79.3) {
  echo 'FIGHT!! vous êtes dans la catégorie poids LEGERS';
}
else {
  echo 'impossible de combattre vous n\'êtes pas dans la même catégorie de poids !';
}
echo'<br>';
