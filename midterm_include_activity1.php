<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
include("midterm_activity1.php");
?>



<body>

<?php


function mycar1()
{

	$mynewcar = new Car();

$mynewcar->setMyMake("Mustang");
$mynewcar->setMySpeed("200");

$newspeed=intval($mynewcar->getMyMaxSpeed());


if($newspeed >= 200)
{

echo "Beep! I am a ".$mynewcar->getMymake()."<br>";
echo "I am a sports car. I can run at maximum speed of ".$newspeed;

}


if($newspeed <= 140)
{
echo "Beep! I am a ".$mynewcar->getMymake()."<br>";
echo "I am an ordinary car.".$newspeed;
}

}

function mycar2()
{

$mynewcar = new Car();

$mynewcar->setMyMake("Toyota");
($mynewcar->setMySpeed("120"));

$newspeed=intval($mynewcar->getMyMaxSpeed());


if($newspeed > 200)
{

echo "Beep! I am a ".$mynewcar->getMymake()."<br>";
echo "I am a sports car. I can run at maximum speed of ".$newspeed;

}


if($newspeed <= 140)
{
echo "Beep! I am a ".$mynewcar->getMymake()."<br>";
echo "I am an ordinary car.";
}

}

function mycar3()
{

$mynewcar = new Car();

$mynewcar->setMyMake("Chevy");
($mynewcar->setMySpeed("170"));

$newspeed=intval($mynewcar->getMyMaxSpeed());


if($newspeed > 200)
{

echo "Beep! I am a ".$mynewcar->getMymake()."<br>";
echo "I am a sports car. I can run at maximum speed of ".$newspeed;

}


if($newspeed <= 140)
{
echo "Beep! I am a ".$mynewcar->getMymake()."<br>";
echo "I am an ordinary car.";
}

}

function mycar4()
{

$mynewcar = new Car();

$mynewcar->setMyMake("Jeep");
($mynewcar->setMySpeed("50"));

$newspeed=intval($mynewcar->getMyMaxSpeed());


if($newspeed > 200)
{

echo "Beep! I am a ".$mynewcar->getMymake()."<br>";
echo "I am a sports car. I can run at maximum speed of ".$newspeed;

}


if($newspeed <= 140)
{
echo "Beep! I am a ".$mynewcar->getMymake()."<br>";
echo "I am an ordinary car.";
}

}

mycar1();
echo "<br>";
echo "<br>";
mycar2();
echo "<br>";
echo "<br>";
mycar3();
echo "<br>";
echo "<br>";
mycar4();







?>


    
</body>




</html>