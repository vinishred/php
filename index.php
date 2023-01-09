<?php

function compare(User $user1, User $user2): bool
{
  return $user1->surname === $user2->surname;
}
require_once('user.php');

require_once('couple.php');

$user1 = new User('M', 'Jean', 'Dupont');
$user2 = new User('Mme', 'Sophie', 'Durant');
$user3 = new User('M', 'Vincent', 'Callarec');
echo $user1->sayHello();
echo $user2->sayHello();
echo $user3->sayHello();

$couple = new Couple($user1, $user2);

echo $couple->user1->name."<br>";
compare($user1, $user2);
