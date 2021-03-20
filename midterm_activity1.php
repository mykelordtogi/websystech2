<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

class Vehicle
{

var $make;

   function setMyMake($make_new)
   {
$this->make = $make_new;

   }



   function getMyMake()
   {
       return $this->make;
   }

}

class Car extends Vehicle
{
 var $maxspeed;


function setMySpeed($make_new_car)
{
$this->maxspeed = $make_new_car;

}


function getMyMaxSpeed()
{
    return $this->maxspeed;
}






}






?>


</body>
</html>