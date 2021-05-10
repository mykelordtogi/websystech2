<?Php
$config = array('host'=>'sql6.freesqldatabase.com',
				'username'=>'sql6410853',
				'password'=>'lw3xWI1KUz',
				'database'=>'sql6410853');
$db = new mysqli($config['host'],
				 $config['username'],
				 $config['password'],
				 $config['database']);
if(mysqli_connect_error()){
	echo"error: could not connect to database".mysqli_connect_error();
}
// else{
// 	echo "Database connection established successfully";
// 	echo " ";
// }

?>


<?php

//freesqldatabase.com password = ZJPRkESw.4@GsEr

?>