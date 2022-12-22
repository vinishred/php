<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les bases de PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1><?php echo 'Hello Guys !<br>';?></h1>
  <?php
  // const permet de fixer une valeur, pas de dollar pour déclarer une constante
  const SOFTWARE_VERSION = 1.0; 
  $numero = 1;
  echo "<br>" .$numero;
  $numero = $numero + 1;
  echo "<br>" .$numero;
  ?>
</body>
<footer>
  <p>Version <?php echo SOFTWARE_VERSION; ?></p>
</footer>
</html>
