<?php
// array = tableau en PHP
$array = [1, 2, 3, 4, 1];

// pour modifier une valeur on fait la déclaration du tableau et de l'index désiré
// si on indique pas d'index la valeur viendra par défaut s'ajouter en fin de tableau
$array [] = "coucou";
// par défaut, les tableaux ne sont pas typés on peut mélanger int float string
// pour afficher les éléments de mon tableau avec leur indice je fais la fonction var_dump
echo "faire un var_dump";
var_dump($array);
// pour afficher une valeur dans un tableau on fait un echo du tableau avec entre crochet la valeur désirée;
echo "afficher une valeur d'un tableau <br>";
echo $array[5];
echo "<br>";
echo "<br>";
// array_unshift rajoute une valeur en début de tableau 
echo "ajouter une valeur au début d'un tableau avec unshift ";
echo "<br>";
echo "<br>";
array_unshift($array, "Salut");
var_dump($array);
//  on peut rajouter une valeur à un index distant du précédent 
$array[10] = "Test";
echo "ajouter une valeur à un indice éloigné dans un tableau ";
var_dump($array);
echo "<br>";

// opérateur spread permet de prendre les valeurs d'un tableau et de les ranger à la suite dans un autre tableau
echo "ranger mon tableau dans un tableau ordonné avec spread <br>";
$monTableau = [...$array];
var_dump($monTableau);
echo "<br>";

// slice permet de prendre une partie de tableau

// comment itérer sur un tableau
// les boucles

// for (instructions d'initialisation; condition de maintien; instruction de pas) {action à réaliser}
echo "la boucle for <br>";
for ($i=0; $i <= 12; $i++) { 
  echo $i . "-";
}
echo "<br>";
echo "<br>";
echo "la boucle for pour un tableau <br>";
echo "on doit rajouter if pour vérifier que toutes les cases existent <br>";
// for sur un tableau
// peut etre plus complexe à gérer car certaines valeurs peuvent être absentes
for ($i=0; $i < count($array); $i++) { 
  if (array_key_exists($i, $array)) {
    // execution si condition est vraie
    echo $array[$i] . "-";
  } else {
    // exécution si la condition est fausse
    echo "😃 - ";
  }
}
echo "<br>";
echo "<br>";
echo "la boucle foreach <br>";
// foreach 
// permet d'itérer (=boucler) sur un tableau connu avec une variable qui corespond à un élément de ce tableau
foreach ($array as $element) {
  echo $element. "<br>";
}
echo "<br> la boucle while <br>";
echo "<br>";
// while 
// on précise d'abord l'instruction d'initialisation
$d = 0;
// ensuite on définit la condition de maintien entr parenthèse
while ($d <12) {
  // puis entre croche l'action à réaliser
  echo $d. " et ";
  // et ensuite le pas
  $d ++;
}
echo "<br>";
echo "<br> la boucle do...while";
// do...while faire tant que 
// grosse différence sur l'ordre dans lequel sont données les informations
// la première instruction sera toujours réalisée 
$d = 1;
do {
  echo $d. " et ";
  $d ++;
} while ($d <= 10);

// tableau clés/valeurs ou tableau associatif
$associativeArray = [
  "id" => 1,
  "name" => "Vince",
  "age" => 38
];
var_dump ($associativeArray);
echo "<br>" . $associativeArray["name"];


