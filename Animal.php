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


 function setBreed($breed)
 {
 $this->breed = $breed;

 }
 	function getBreed()
 {

 return $this->breed;
}


 function setColor($color)
 {
 $this->color = $color;

 }
 	function getColor()
 {

 return $this->color;
}


}


class Dog extends Animal
{
var $owner;

public function __construct($breed,$color)
	{
$this->breed = $breed;
$this->color = $color;
	}

function setOwner($owner)
 {
 $this->owner = $owner;

 }
 	function getOwner()
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