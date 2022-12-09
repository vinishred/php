<?php
$boxer1Weight = 70.4;
$boxer2Weight = 72.2;

if ($boxer1Weight >= 90 && $boxer2Weight >= 90) {
  echo 'FIGHT !!!';
} 
else if ($boxer1Weight < 90 && $boxer2Weight >= 90) {
  echo 'Impossible de combattre !car boxer1 n\'est pas poids lourd';
} 
else if ($boxer1Weight >= 90 && $boxer2Weight < 90) { 
  echo 'Impossible de combattre !car boxer2 n\'est pas poids lourd';
  } 
else {
  echo 'Impossible de combattre ! car les deux boxeurs ne sont pas des poids lourds';
  }

