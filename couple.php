<?php

class Couple
{
  public User $user1;
  public User $user2;

  public function __construct($user1, $user2)
  {
    $this->user1 = $user1;
    $this->user2 = $user2;
  }
}

