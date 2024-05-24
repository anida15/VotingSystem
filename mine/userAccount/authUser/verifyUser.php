<?php


//  $servername = "fdb30.awardspace.net";
//  $username = "4245361_maseno";
//  $password = "maseno123";
//  $db ="4245361_maseno";
//   date_default_timezone_set('Africa/Nairobi');
//  $conn = mysqli_connect($servername, $username, $password,$db);


 $servername = "localhost";
 $username = "root";
 $password = "";
 $db ="aminaShop";
 
 date_default_timezone_set('Africa/Nairobi');
 $conn = mysqli_connect($servername, $username, $password,$db);

 



if(isset($_POST["username"]))
{
	
           $username =trim($_POST["username"]);
           $user_password = trim($_POST["password"]);
           
       

		   $stmt = $conn -> prepare('SELECT username,password FROM users WHERE username=?');
           $stmt -> bind_param('s', $username);
		   $stmt -> execute();
		   $stmt -> store_result();
		   $stmt -> bind_result($username,$password);
		   $stmt -> fetch();
		   
		 
		   if(password_verify($user_password, $password))
			{     session_start();
               
				$_SESSION['username'] = $username; 
				$_SESSION['token'] = $password;
				
				echo "Successfully Login !!";
                
               header("location:../userPage.php");

			}else{


				echo "Wrong Credentials";
			}
		  
 
           
     

 
}

?>