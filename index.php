<html>
  <head>
    <title>Devine mon nombre !</title>
  </head>
  <body>
    <h1>Pense à un nombre entre 1 et 50 !</h1>
    <?php 
      $number = 22; // le nombre à trouver
      $numberTrials = 10; // le nombre de tentatives autorisées maximum
      if ($number < 0 || $number > 50) {
        echo 'Hey, tu triches ! On avait dit dit entre 0 et 50';
      } else {
    ?>
    <p>Hum, attends j'essaye de deviner !</p>
    <?php
        $trials = 0;
        do {
          $computerTrial = rand(0, 50);
          echo 'Est ce qu\'il s\'agit du nombre' .$computerTrial. '?';
          
          if ($computerTrial == $number) {
            echo 'Bravo tu as trouvé c\'est bien le bon nombre<h2>tu es un véritable champion</h2>';
          break;
          } else {
          echo '<h2> non c\'est raté <br> c\'est pas mauvais, c\'est très mauvais !</h2>';
          }
          $trials++;
        } while ($trials < $numberTrials);
        if ($computerTrial != $number){
          echo '<br> Désolé je n\'ai pas trouvé =( !';
        }
      }
    ?> 
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>