<!DOCTYPE html>

<html>
<head><title>Submitted Page</title></head>

<style>
a{
    text-decoration: none;;
}

</style>

<body>

<?php

 

$mydepartments = $_POST['departments'];
$name1 = $_POST['wname'];
$fname1 = $_POST['faname'];
$mname1 = $_POST['maname'];
$gender1 = $_POST['gender'];

if($name1|| $fname1 || $mname1|| $_POST['mail'] || $mydepartments  || $gender1 || $_POST['myaddress'] || $_POST['lang'])
{


    echo "<b>Your name : </b>".ucfirst($name1)."<br>";
    echo "<b>Your Father's name : </b>".ucfirst($fname1)."<br>";
    echo "<b>Your Mother's name :</b> ".ucfirst($mname1)."<br>";
    echo "<b>Your Email Address : </b>".$_POST['mail']."<br>";
    echo "<b>Your Department : </b>";
echo strtoupper($mydepartments)."<br>";

    echo "<b>Your Gender : </b>".ucfirst($gender1)."<br>";
    echo "<b>Your Address : </b>".$_POST['myaddress']."<br>";
    echo "<b>Language Known : </b>"."<br>";
    foreach($_POST['lang'] as $langvalue)
    {
        echo $langvalue.",";
      
    }
   

}




?>
<br>
<br>


<button> <a href="https://websystech2igot.herokuapp.com/prelim_exer2.php">Go back to the fill up form</a></button>
</body>

</html>