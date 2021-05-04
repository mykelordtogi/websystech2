<?Php

require_once('../dao/config.php');

class crudDAO
{


    public function register($lname,$fname,$username,$password,$email)
    {
       global $db;

        $hashpass = md5($password);

        $sql="SELECT * FROM users WHERE email = '$email'";
		$result=$db->query($sql);
		
        if(mysqli_num_rows($result) > 0){
			return false;
		}
        else{
			$sql="INSERT INTO users (lname, fname, username, password, email) VALUES ('$lname','$fname','$username','$hashpass','$email')";
			$result=$db->query($sql);
        }

        if($result){
            return $result;
        }
        else{
            return false;
        }

    }

    public function Login($email,$password)
    {  
    global $db;
    
    $sql= "SELECT * FROM users WHERE email = '".$email."' AND password = '".md5($password)."'";  
              
               $result = $db->query($sql);

               /*
               if(mysqli_num_rows($result>0))
               {
                while($row = mysqli_fetch_assoc($result))
                {
                    session_start();

                    $_SESSION['fname'] = $row['fname'];

                    

                }

                return true;
               }
    

               else
               {
                   return false;
               }
               */

            $num_results = $result->num_rows;


                  
                if ($num_results == 1)   
                {  
               
                    while($row = mysqli_fetch_assoc($result))
                    {
                        session_start();
    
                        $_SESSION['fname'] = $row['fname'];
    
                        
    
                    }  
                

                    return TRUE;  
                }  
                else  
                {  
                    return FALSE;  
                }  
        
    
      } 

      public function read()
      {
          global $db;

          $sql = "SELECT id,fname,lname FROM users";

          $result = $db->query($sql);

          return $result;
          

      }

    
}    

?>


