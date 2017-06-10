<?php 
	if (isset($_POST['username']) && isset($_POST['password'])){
		userlogin();
	}
	else {
		echo "Invalid Parameter";
	}

	function userlogin(){
		require('dbconnect.php');
		$email = test_input($_POST['username']);
		$password = test_input($_POST['password']);
		
		if ($email=="nagno@321" and $password=="12345"){
			echo "1";
			//header("location:dashboard.php");
		}
		else echo "Wrong username or password!";
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>