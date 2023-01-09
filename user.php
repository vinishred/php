<?php

class User
{
  public string $civility;
  public string $name;
  public string $surname;

  public function __construct(string $civility, string $name, string $surname)
  {
    $this->name = $name;
    $this->civility = $civility;
    $this->surname = $surname;
  }

  public function sayHello(): string
  {
    return 'Bonjour ' .$this->civility." ".$this->name.' '.$this->surname."<br>";
  }

  public function __destruct()
  {
    echo "Au revoir ".$this->civility." ".$this->surname. " et à bientôt.<br>";
  }
}

