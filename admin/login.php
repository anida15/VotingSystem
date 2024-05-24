<?php
	session_start();
	include 'includes/conn.php';

	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = trim($_POST['password']);

		$sql = "SELECT * FROM admin WHERE username = '$username' AND password ='$password'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Wrong Credentials';
		}
		else{
			$row = $query->fetch_assoc();
			$hash_password = $row['password'];
				$_SESSION['admin'] = $row['id'];
			
		}
		
	}
	else{
		$_SESSION['error'] = 'Input admin credentials first';
	}

	header('location: index.php');

?>