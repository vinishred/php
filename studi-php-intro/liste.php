<?php 
// include "data/user.php";
require_once "data/user.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <title>liste d'utilisateurs</title>
</head>
<body>
  <!-- conteneur général -->
  <div class = "container">
    <h1>Nombre d'utilisateurs : <?php echo count($users) ?></h1>
    <!-- élément conteneur de ma grille de cards -->
    <div class= "row row-cols-1 row-cols-md-2 g-4">
      <?php foreach ($users as $user) {
        //  ou avec for 
        //  for ($i = 0; $i < count($users); $i++) {
        //   puis echo $users[$i]["name"]} 
        // include "user_card.php";
        require "user_card.php";
         } ?>
    </div>
    <!-- fin element conteneur de ma grille -->
  </div>
    <!-- fin de conteneur général -->
</body>
</html>
