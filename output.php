<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<?php 
include("Animal.php");

	?>


<body>


<?Php

$dog = new Dog("Bulldog","Brown");

$dog->setOwner("John");

echo "It's a  ".$dog->getBreed();
echo " <br>It's color is ".$dog->getColor();
echo "<br>His master is ".$dog->getOwner();

echo "<br><br>";

$tiger = new Tiger("Bengal Tiger","White");

echo "It's a  ".$tiger->getBreed();
echo " <br>It's color is ".$tiger->getColor();
echo "<br>It lives in the forest";

?>

</body>
</html>






