<?php

session_start();
include_once('../dao/config.php');
include("styles.php");





//echo $_GET['id'];




if(isset($_GET['delete']))
{

$id = $_GET['delete'];


global $db;

          $sql = "DELETE FROM users WHERE id=$id" or die($mysqli->error());

          $resultdelete = $db->query($sql);

          $_SESSION["login_error_msg"] = "Record Deleted Successfully";
          header("location:../pages/read.php");

         // return $resultdelete;

       

    

// $mysqli->query("DELETE FROM users WHERE id=$id") or die($mysqli->error());


}


/*
else if(isset($_GET['edit']))
{

$id = $_GET['edit'];

global $db;

$sql = "SELECT * FROM users WHERE id=$id" or die($mysqli->error());
$resultsedit= $db->query($sql);


if(count($resultsedit)==1)
{
  $row = $resultsedit->fetch_array();
  $fname = $row['fname'];
   $lname = $row['lname'];
}
*/


?>

<?php
include_once('../dao/config.php');
$id = $_GET['edit'];


$qry = mysqli_query($db,"select * from users where id='$id'"); // select query

$data = mysqli_fetch_array($qry);

if(isset($_POST['save']))
{


    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
	
    $edit = mysqli_query($db,"update users set fname='$fname', lname='$lname' where id='$id'");
	
    if($edit)
    {

        mysqli_close($db); 
        header("location:read.php");
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}



?>

<h3>Edit Data</h3>



<div style="position: fixed;left:500px;top:200px;">
<form method="POST">
<div class="form-group">
	<label>Firstname</label>
	<input type="text" name="fname" class="form-control" 
	value="<?php
	echo $data['fname'] ?>" placeholder="Enter your Firstname">
						</div>

						<div class="form-group">
	<label>Lastname</label>
	<input type="text" name="lname" class="form-control" 
	value="<?php echo $data['lname'] ?>" placeholder="Enter your Lastname">
						</div>
	<div class="form-group">

	<button type="submit" class="btn btn-primary" name="save">Save</button>

	</div>



</form>
	</div>

        
