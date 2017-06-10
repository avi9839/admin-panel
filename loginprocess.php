<?php 
	if (isset($_POST['email']) && isset($_POST['password'])){
		userlogin();
	}
	else {
		echo "Invalid Parameter";
	}

	function userlogin(){
		require('dbconnect.php');
		$email = test_input($_POST['email']);
		$password = test_input($_POST['password']);
		$sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0){
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