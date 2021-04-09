<?php

class Animal
{

public $breed;
 public $color;


public function __construct($breed,$color)
	{
$this->breed = $breed;
$this->color = $color;
	}


 public function setBreed($breed)
 {
 $this->breed = $breed;

 }
 	public function getBreed()
 {

 return $this->breed;
}


 public function setColor($color)
 {
 $this->color = $color;

 }
 	public function getColor()
 {

 return $this->color;
}


}


class Dog extends Animal
{
private $owner;

public function __construct($breed,$color)
	{
$this->breed = $breed;
$this->color = $color;
	}

public function setOwner($owner)
 {
 $this->owner = $owner;

 }
 	public function getOwner()
 {

 return $this->owner;
}



}


class Tiger extends Animal
{
public function __construct($breed,$color)
	{
$this->breed = $breed;
$this->color = $color;
	}

}



?>