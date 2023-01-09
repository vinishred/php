<?php
class Moto 
{
	public string $brand;
	public string $color;
	public float $maxSpeed;
	
	public function __construct(string $brand, string $color, float $maxSpeed)
	{
		$this->brand = $brand;
		$this->color = $color;
		$this->maxSpeed = $maxSpeed;
	}
	
	public function getDescription():string 
	{
		return $this->brand." ".$this->color." ayant atteint une vitesse de ".$this->maxSpeed." km/h";
	}
	public function __destruct()
		{
		echo "la moto ".$this->brand. " rentre au garage";
	}
}

class Race 
{
	public Moto $moto1;
	public Moto $moto2;
	
	public function __construct(Moto $moto1, Moto $moto2)
	{	
	$this->moto1 = $moto1;
	$this->moto2 = $moto2;
	
	}
	public function startRace():Moto
	{
		if ($this->moto1->maxSpeed > $this->moto2->maxSpeed)
		{ return $this->moto1;
		} return $this->moto2;
	}
}

$moto1 = new Moto("Piaggot", "violet", 217);
$moto2 =new Moto("Yamaha", "rouge", 220);
$moto3 = new Moto("Suzuki", "jaune", 245);

$race = new Race($moto1, $moto2);
echo $race->startRace()->getDescription();